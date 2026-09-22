/**
 * PHP syntax check for the whole theme.
 *
 * Runs `php -l` over every .php file outside node_modules/vendor and exits
 * non-zero when any file fails to parse. No composer or global tooling needed,
 * so it also works on a clean checkout.
 */

const { execFileSync } = require('child_process');
const fs = require('fs');
const path = require('path');

const ROOT = path.resolve(__dirname, '..');
const SKIP = new Set(['node_modules', 'vendor', 'dist', '.git']);

function collect(dir, found = []) {
  for (const entry of fs.readdirSync(dir, { withFileTypes: true })) {
    if (entry.name.startsWith('.') || SKIP.has(entry.name)) continue;
    const full = path.join(dir, entry.name);
    if (entry.isDirectory()) collect(full, found);
    else if (entry.isFile() && entry.name.endsWith('.php')) found.push(full);
  }
  return found;
}

const files = collect(ROOT);
const failures = [];

for (const file of files) {
  try {
    execFileSync('php', ['-l', file], { stdio: 'pipe' });
  } catch (error) {
    const output = [error.stdout, error.stderr]
      .map((buffer) => (buffer ? buffer.toString() : ''))
      .join('')
      .trim();
    failures.push(`${path.relative(ROOT, file)}\n  ${output}`);
  }
}

if (failures.length) {
  console.error(`PHP lint failed in ${failures.length} of ${files.length} file(s):\n`);
  console.error(failures.join('\n\n'));
  process.exit(1);
}

console.log(`PHP lint passed: ${files.length} files, no syntax errors.`);
