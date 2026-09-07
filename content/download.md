+++
title = "Download"
template = "page.html"
weight = 2
+++

Official binaries for BletchMAME are provided for Windows in both Windows Installer (MSI) and ZIP form.  BletchMAME compiles on Linux but not macOS (MAME for macOS currently lacks support for the `-attach_window` parameter)

More details on the differences between different BletchMAME versions can be found in the latest [CHANGELOG](https://github.com/npwoods/bletchmame_rs/blob/master/CHANGELOG.md).

## Windows Releases

### BletchMAME v3 ([Rust](https://rust-lang.org/)/[Slint](https://www.slint.dev))

{{ download_table(version_prefix="3.") }}

### Interim Builds ###

Unreleaed interim builds of BletchMAME can be found at the [GitHub CI](https://github.com/npwoods/bletchmame_rs/actions/workflows/windows_release.yml).  Being unreleased, they provide a preview of new functionality but are not guaranteed to be functional.

### Source Code

Source code for BletchMAME is available on GitHub. The main repository is at [github.com/npwoods/bletchmame_rs](https://github.com/npwoods/bletchmame_rs).

## Older Windows Releases

Starting with version 3, BletchMAME is written in [Rust](https://rust-lang.org/) and uses the [Slint](https://www.slint.dev) toolkit. Older versions are written in C++.

### BletchMAME v2 (C++/[Qt](https://www.qt.io/))

{{ download_table(version_prefix="2.") }}

### BletchMAME v1 (C++/[wxWidgets](https://wxwidgets.org/))

{{ download_table(version_prefix="1.") }}

### Source Code

The old repository is at [github.com/npwoods/bletchmame](https://github.com/npwoods/bletchmame).
