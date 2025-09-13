# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [2.0.0] - 2024-12-19

### 🎉 Major Release - Complete Facade System & Auto-Update

This is a major release that introduces a powerful Facade system, auto-update capabilities, and comprehensive testing tools.

### ✨ Added

#### 🚀 Facade System

- **TablerIcon Facade**: Use `TablerIcon::iconName()` syntax for all icons
- **Magic Method Support**: Automatic conversion of method names to icon names
- **Numeric Icon Handling**: Smart conversion for icons starting with numbers
  - `TablerIcon::twelveHours()` → `12-hours`
  - `TablerIcon::twentyFourHours()` → `24-hours`
  - `TablerIcon::twoFa()` → `2fa`
  - `TablerIcon::threeDCubeSphere()` → `3d-cube-sphere`
- **Attributes Support**: Full support for HTML attributes in Facade methods
- **Multiple Usage Patterns**:
  - Facade: `TablerIcon::home(['class' => 'icon'])`
  - Helper: `tabler_icon('home', ['class' => 'icon'])`
  - Global Helper: `TablerIcon()::home()`
  - Blade Component: `<x-tabler-icons::home />`

#### 🔄 Auto-Update System

- **Latest Version Detection**: Automatically fetches latest Tabler Icons version from GitHub
- **Smart Download**: Uses GitHub API to get the most recent release
- **Multi-Format Support**: Handles both outline and filled icon variants
- **Automatic Processing**: Generates Blade components for all icon types
- **Version Tracking**: Updates from any version to the latest automatically

#### 🎨 Comprehensive Testing & Demo Pages

- **Icon Browser** (`/tabler-icons-demo`): Browse all 6000+ icons with pagination and search
- **Tailwind CSS Test Page** (`/tabler-icons-test`): Complete styling showcase
  - Color variations (10+ colors)
  - Size variations (w-4 to w-20)
  - Advanced styling (shadows, transforms, animations)
  - Brand icons with proper colors
  - Numeric icons examples
  - Usage tips and best practices

#### 🛠 Utility Methods

- `TablerIcon::exists('icon-name')` - Check if icon exists
- `TablerIcon::all()` - Get all available icons (6000+)
- `TablerIcon::search('keyword')` - Search icons by keyword
- `TablerIcon::render('name', $attributes)` - Direct rendering

### 🔧 Enhanced

#### 📦 Icon Collection

- **Updated to Tabler Icons v3.34.1**: Latest icon set with 6000+ icons
- **Filled Variants**: Added support for filled icon versions
- **Brand Icons**: Comprehensive brand icon collection
- **Organized Structure**: Better organization of icon categories

#### 🎯 Attributes System

- **Smart SVG Merging**: Attributes are properly merged into SVG elements
- **Full Tailwind Support**: All Tailwind CSS classes work seamlessly
- **Multiple Attribute Types**: Support for class, style, data-\*, and custom attributes
- **Proper Escaping**: Safe HTML attribute handling

### 🔄 Changed

#### 🏗 Architecture Improvements

- **Service Provider Enhancement**: Better registration and alias handling
- **Facade Registration**: Automatic global alias registration
- **Helper Functions**: Improved helper function implementations
- **Error Handling**: Better error messages and validation

### 🗑 Removed

#### 🧹 Cleanup

- **Unused Config**: Removed unnecessary `tabler-icons.php` config file
- **Legacy Code**: Cleaned up old implementation patterns
- **Test Files**: Removed development-only test files

### 🐛 Fixed

#### 🔧 Technical Issues

- **Numeric Icon Syntax**: Fixed PHP syntax errors with number-prefixed icons
- **Attribute Handling**: Resolved issues with HTML attribute merging
- **View Compilation**: Fixed Blade template compilation errors
- **Method Resolution**: Improved magic method resolution

### 📊 Statistics

- **Total Icons**: 6,001 icons (up from ~5,000)
- **Icon Categories**: Outline, Filled, Brand variants
- **File Size**: Optimized SVG files for better performance
- **Browser Support**: All modern browsers supported
- **PHP Compatibility**: PHP 8.0+ required

### 🚀 Performance

- **Faster Loading**: Optimized icon loading and caching
- **Memory Efficient**: Reduced memory footprint
- **Lazy Loading**: Icons loaded only when needed

### 🔐 Security

- **Input Validation**: Proper validation of icon names and attributes
- **XSS Prevention**: Safe HTML attribute handling
- **Sanitization**: Proper escaping of user input

### 📱 Compatibility

- **Laravel 9+**: Full compatibility with Laravel 9 and 10
- **PHP 8+**: Requires PHP 8.0 or higher
- **Tailwind CSS**: Full integration with Tailwind CSS

### 🎯 Migration Guide

#### From v1.x to v2.0

**Old Usage:**

```php
<x-tabler-icons::home />
{{ tabler_icon('home') }}
```

**New Usage (Recommended):**

```php
{!! TablerIcon::home() !!}
{!! TablerIcon::home(['class' => 'w-6 h-6 text-blue-500']) !!}
```

**Numeric Icons:**

```php
// ❌ Old (causes syntax error)
TablerIcon::12Hours()

// ✅ New (works perfectly)
TablerIcon::twelveHours()
```

---

## [0.0.1] - 2023-11-07

- Initial release
