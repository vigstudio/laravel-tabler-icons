<?php

namespace VigStudio\TablerIcons;

use Illuminate\Support\Str;

class TablerIcon
{
    /**
     * Magic method to handle icon calls
     *
     * @param string $name
     * @param array $arguments
     * @return \Illuminate\Support\HtmlString
     */
    public static function __callStatic(string $name, array $arguments): \Illuminate\Support\HtmlString
    {
        // Convert method name to icon name
        $iconName = self::convertMethodNameToIconName($name);

        // Get attributes from arguments
        $attributes = $arguments[0] ?? [];

        return self::render($iconName, $attributes);
    }

    /**
     * Convert method name to icon name
     *
     * @param string $methodName
     * @return string
     */
    protected static function convertMethodNameToIconName(string $methodName): string
    {
        // Handle word-based numeric prefixes (order matters - longer matches first)
        $wordToNumber = [
            'threeHundredSixty' => '360', 'oneHundred' => '100',
            'twentyFive' => '25', 'twentyFour' => '24', 'twentyThree' => '23', 'twentyTwo' => '22', 'twentyOne' => '21',
            'nineteen' => '19', 'eighteen' => '18', 'seventeen' => '17', 'sixteen' => '16', 'fifteen' => '15',
            'fourteen' => '14', 'thirteen' => '13', 'twelve' => '12', 'eleven' => '11',
            'fifty' => '50', 'thirty' => '30', 'twenty' => '20',
            'ten' => '10', 'nine' => '9', 'eight' => '8', 'seven' => '7', 'six' => '6',
            'five' => '5', 'four' => '4', 'three' => '3', 'two' => '2', 'one' => '1',
        ];

        // Check if method starts with a word number
        foreach ($wordToNumber as $word => $number) {
            if (str_starts_with($methodName, $word)) {
                $rest = substr($methodName, strlen($word));
                if ($rest) {
                    // Convert rest to kebab-case
                    $restKebab = Str::kebab($rest);

                    // Special cases for common patterns
                    if (strtolower($rest) === 'fa') {
                        return $number . 'fa'; // "twoFa" -> "2fa"
                    }

                    // For patterns like "DCubeSphere" -> "d-cube-sphere"
                    if (strlen($rest) > 1 && ctype_upper($rest[0]) && ctype_upper($rest[1])) {
                        return $number . strtolower($rest[0]) . '-' . ltrim(Str::kebab(substr($rest, 1)), '-'); // "threeDCubeSphere" -> "3d-cube-sphere"
                    }

                    // For single word (like "Hours")
                    if (! str_contains($restKebab, '-')) {
                        return $number . '-' . $restKebab; // "twentyFourHours" -> "24-hours"
                    }

                    return $number . '-' . ltrim($restKebab, '-');
                }

                return $number;
            }
        }

        // Handle direct numeric prefixes (fallback)
        if (preg_match('/^(\d+)(.*)/', $methodName, $matches)) {
            $number = $matches[1];
            $rest = $matches[2];

            // Convert the rest to kebab-case
            $rest = Str::kebab($rest);

            // Combine number with the rest
            return $number . ($rest ? '-' . ltrim($rest, '-') : '');
        }

        // Regular kebab-case conversion
        return Str::kebab($methodName);
    }

    /**
     * Convert icon name to valid method name
     *
     * @param string $iconName
     * @return string
     */
    public static function convertIconNameToMethodName(string $iconName): string
    {
        // Handle icons that start with numbers
        if (preg_match('/^(\d+)(.*)/', $iconName, $matches)) {
            $number = $matches[1];
            $rest = $matches[2];

            // Convert number to word and combine with rest
            $numberWords = [
                '1' => 'one', '2' => 'two', '3' => 'three', '4' => 'four', '5' => 'five',
                '6' => 'six', '7' => 'seven', '8' => 'eight', '9' => 'nine', '10' => 'ten',
                '11' => 'eleven', '12' => 'twelve', '13' => 'thirteen', '14' => 'fourteen',
                '15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen', '18' => 'eighteen',
                '19' => 'nineteen', '20' => 'twenty', '21' => 'twentyOne', '22' => 'twentyTwo',
                '23' => 'twentyThree', '24' => 'twentyFour', '25' => 'twentyFive', '30' => 'thirty',
                '50' => 'fifty', '100' => 'oneHundred', '360' => 'threeHundredSixty',
            ];

            $numberWord = $numberWords[$number] ?? 'num' . $number;

            if ($rest) {
                // Convert rest to camelCase and combine
                $restCamel = Str::camel(ltrim($rest, '-'));

                return $numberWord . ucfirst($restCamel);
            }

            return $numberWord;
        }

        // Regular camelCase conversion
        return Str::camel($iconName);
    }

    /**
     * Render an icon by name
     *
     * @param string $name
     * @param array $attributes
     * @return \Illuminate\Support\HtmlString
     */
    public static function render(string $name, array $attributes = []): \Illuminate\Support\HtmlString
    {
        // Check if the icon component exists
        $componentPath = resource_path("views/vendor/tabler-icons/components/{$name}.blade.php");

        if (! file_exists($componentPath)) {
            // Try to find the icon in the package views
            $packagePath = __DIR__ . "/../resources/views/components/{$name}.blade.php";

            if (! file_exists($packagePath)) {
                throw new \InvalidArgumentException("Icon '{$name}' not found.");
            }
        }

        // Get the SVG content
        $svgContent = view("tabler-icons::components.{$name}")->render();

        // If no attributes, return as is
        if (empty($attributes)) {
            return new \Illuminate\Support\HtmlString($svgContent);
        }

        // Parse and modify SVG with attributes
        $svgContent = self::addAttributesToSvg($svgContent, $attributes);

        return new \Illuminate\Support\HtmlString($svgContent);
    }

    /**
     * Add attributes to SVG element
     *
     * @param string $svgContent
     * @param array $attributes
     * @return string
     */
    protected static function addAttributesToSvg(string $svgContent, array $attributes): string
    {
        // Convert attributes array to string
        $attributeString = '';
        foreach ($attributes as $key => $value) {
            $attributeString .= ' ' . $key . '="' . htmlspecialchars($value) . '"';
        }

        // Add attributes to the SVG tag
        $svgContent = preg_replace('/(<svg[^>]*)(>)/', '$1' . $attributeString . '$2', $svgContent);

        return $svgContent;
    }

    /**
     * Get all available icons
     *
     * @return array
     */
    public static function all(): array
    {
        $iconsPath = __DIR__ . '/../resources/views/components';
        $icons = [];

        if (is_dir($iconsPath)) {
            $files = glob($iconsPath . '/*.blade.php');

            foreach ($files as $file) {
                $iconName = basename($file, '.blade.php');
                $icons[] = $iconName;
            }
        }

        sort($icons);

        return $icons;
    }

    /**
     * Check if an icon exists
     *
     * @param string $name
     * @return bool
     */
    public static function exists(string $name): bool
    {
        $packagePath = __DIR__ . "/../resources/views/components/{$name}.blade.php";

        return file_exists($packagePath);
    }

    /**
     * Search for icons by name
     *
     * @param string $search
     * @return array
     */
    public static function search(string $search): array
    {
        $allIcons = self::all();

        return array_filter($allIcons, function ($icon) use ($search) {
            return str_contains($icon, $search);
        });
    }
}
