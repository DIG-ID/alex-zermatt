# Changelog

All notable changes to this theme are documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.0.0] - 2026-09-22

### Added

- Simple Booking Syncro Box v4 on room pages, so the handoff to the booking
  engine can carry marketing parameters and the visitor's consent state.
- A noindex test page template for trying the booking widget in isolation.
- `npm run php:lint`, a dependency-free syntax check over the theme's PHP.

### Fixed

- The visitor's consent state now reaches the booking engine. The widget
  defaults ForwardConsentState to false and tests it strictly, so it has to be
  declared explicitly even though the vendor documentation states otherwise.
