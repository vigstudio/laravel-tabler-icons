# Tabler Icons Blade Components

## Installation

You can install the package via composer:

```bash
composer require vigstudio/laravel-tabler-icons
```

## Usage

### Using Blade Components (Traditional Way)

```blade
<x-tabler-icons::arrow-forward-up/>
<x-tabler-icons::arrow-merge-alt-left/>
<x-tabler-icons::arrow-left-circle/>
<x-tabler-icons::2fa/>
```

### Using Helper Function

```php
{{ tabler_icon('arrow-forward-up') }}
{{ tabler_icon('arrow-merge-alt-left') }}
{{ tabler_icon('arrow-left-circle') }}
{{ tabler_icon('2fa') }}
```

### Using Facade & Helpers (New Way)

```php
// Method 1: Facade (Recommended)
{!! TablerIcon::home() !!}
{!! TablerIcon::user(['class' => 'text-blue-500']) !!}
{!! TablerIcon::album() !!}
{!! TablerIcon::brandGithub() !!}

// Method 2: Using helper function
{!! tabler_icon('home') !!}
{!! tabler_icon('user', ['class' => 'text-blue-500']) !!}
{!! tabler_icon('album') !!}

// Method 3: Using global helper (without attributes)
{!! TablerIcon()::home() !!}
{!! TablerIcon()::album() !!}

// Method 4: Through app container
{!! app('tabler-icon')::home() !!}
{!! app('tabler-icon')::user(['class' => 'text-blue-500']) !!}
```

### Method Name Conversion

The facade automatically converts method names to icon names:

- `TablerIcon::home()` → `home`
- `TablerIcon::album()` → `album`
- `TablerIcon::userPlus()` → `user-plus`
- `TablerIcon::brandGithub()` → `brand-github`
- `TablerIcon::heartFilled()` → `heart-filled`

**Numeric Icons (Special Handling):**

- `TablerIcon::twelveHours()` → `12-hours`
- `TablerIcon::twentyFourHours()` → `24-hours`
- `TablerIcon::twoFa()` → `2fa`
- `TablerIcon::threeDCubeSphere()` → `3d-cube-sphere`

> **Note:** Icons starting with numbers use word-based method names since PHP method names cannot start with numbers.

### Available Methods

```php
// Render an icon (multiple ways)
TablerIcon::home(['class' => 'icon', 'style' => 'color: red;'])
TablerIcon::album()
tabler_icon('home', ['class' => 'icon'])
TablerIcon()::home() // Note: global helper doesn't support attributes

// Check if icon exists
TablerIcon::exists('home') // returns bool
TablerIcon::exists('album') // returns bool

// Get all available icons
TablerIcon::all() // returns array (6000+ icons)

// Search for icons
TablerIcon::search('user') // returns array of matching icons
TablerIcon::search('brand') // returns array of brand icons
```

### Working with Attributes

Only `TablerIcon::` facade and `tabler_icon()` helper support attributes:

```php
// ✅ Works - Facade with attributes
{!! TablerIcon::user(['class' => 'w-8 h-8 text-blue-500']) !!}
{!! TablerIcon::home(['style' => 'color: red; width: 32px;']) !!}

// ✅ Works - Helper with attributes
{!! tabler_icon('user', ['class' => 'icon-user', 'data-id' => '123']) !!}

// ❌ Doesn't work - Global helper doesn't support attributes
{!! TablerIcon()::user(['class' => 'test']) !!} // Attributes ignored

// ✅ Alternative - Use Blade component for attributes
<x-tabler-icons::user class="w-8 h-8 text-blue-500" />
```

### Icon Browser & Testing

**Main Icon Browser:**
Visit `/tabler-icons-demo` route (in development environment) to browse all available icons with usage examples.

Features:

- Browse all 6000+ icons with pagination
- Search functionality
- 3 usage methods for each icon:
  1. Facade: `TablerIcon::iconName()`
  2. Helper Function: `tabler_icon('icon-name')`
  3. Blade Component: `<x-tabler-icons::icon-name />`

**Tailwind CSS Test Page:**
Visit `/tabler-icons-test` route to see a comprehensive test page with Tailwind CSS styling examples.

Features:

- 🎨 **Color variations** - All Tailwind color classes
- 📏 **Size variations** - From w-4 h-4 to w-20 h-20
- ✨ **Advanced styling** - Drop shadows, rotations, scaling
- 🎬 **Animations** - Bounce, spin, pulse effects
- 🏢 **Brand icons** - Popular brand icons with proper colors
- 🔢 **Numeric icons** - Examples of number-based icons
- 💡 **Usage tips** - Best practices and conversion examples

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
