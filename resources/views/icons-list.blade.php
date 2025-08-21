<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabler Icons - {{ $total }} Icons Available</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: #f8fafc;
            color: #1a202c;
            line-height: 1.6;
        }
        .header {
            background: white;
            border-bottom: 1px solid #e2e8f0;
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 1rem;
        }
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }
        h1 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #2d3748;
        }
        .search-box {
            display: flex;
            gap: 0.5rem;
            align-items: center;
        }
        .search-input {
            padding: 0.5rem 1rem;
            border: 1px solid #cbd5e0;
            border-radius: 0.375rem;
            font-size: 0.875rem;
            width: 300px;
        }
        .search-btn {
            padding: 0.5rem 1rem;
            background: #4299e1;
            color: white;
            border: none;
            border-radius: 0.375rem;
            cursor: pointer;
            font-size: 0.875rem;
        }
        .search-btn:hover { background: #3182ce; }
        .stats {
            background: #edf2f7;
            padding: 0.75rem 1rem;
            border-radius: 0.375rem;
            font-size: 0.875rem;
            color: #4a5568;
        }
        .main-content {
            padding: 2rem 0;
        }
        .icons-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 1rem;
            margin-bottom: 2rem;
        }
        .icon-card {
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 0.5rem;
            padding: 1rem;
            transition: all 0.2s;
        }
        .icon-card:hover {
            border-color: #cbd5e0;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        .icon-header {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 1rem;
            padding-bottom: 0.75rem;
            border-bottom: 1px solid #f7fafc;
        }
        .icon-preview {
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f7fafc;
            border-radius: 0.375rem;
        }
        .icon-name {
            font-weight: 500;
            color: #2d3748;
            font-size: 0.875rem;
        }
        .usage-methods {
            display: grid;
            gap: 0.75rem;
        }
        .usage-method {
            background: #f7fafc;
            border-radius: 0.375rem;
            padding: 0.75rem;
        }
        .method-label {
            font-size: 0.75rem;
            font-weight: 500;
            color: #4a5568;
            margin-bottom: 0.25rem;
        }
        .method-code {
            font-family: 'Monaco', 'Menlo', 'Ubuntu Mono', monospace;
            font-size: 0.75rem;
            color: #2d3748;
            background: white;
            padding: 0.5rem;
            border-radius: 0.25rem;
            border: 1px solid #e2e8f0;
            overflow-x: auto;
            white-space: nowrap;
        }
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0.5rem;
            margin-top: 2rem;
        }
        .pagination a, .pagination span {
            padding: 0.5rem 0.75rem;
            border: 1px solid #e2e8f0;
            border-radius: 0.375rem;
            text-decoration: none;
            color: #4a5568;
            font-size: 0.875rem;
        }
        .pagination a:hover {
            background: #f7fafc;
            border-color: #cbd5e0;
        }
        .pagination .current {
            background: #4299e1;
            color: white;
            border-color: #4299e1;
        }
        .pagination .disabled {
            color: #a0aec0;
            cursor: not-allowed;
        }
        @media (max-width: 768px) {
            .icons-grid {
                grid-template-columns: 1fr;
            }
            .search-input {
                width: 200px;
            }
            .header-content {
                flex-direction: column;
                align-items: stretch;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="header-content">
                <h1>🎨 Tabler Icons</h1>

                <form method="GET" class="search-box">
                    <input
                        type="text"
                        name="search"
                        value="{{ $search }}"
                        placeholder="Search icons..."
                        class="search-input"
                    >
                    <button type="submit" class="search-btn">Search</button>
                    @if($search)
                        <a href="{{ route('tabler-icons.list') }}" class="search-btn" style="background: #718096;">Clear</a>
                    @endif
                </form>

                <div class="stats">
                    @if($search)
                        Found {{ $total }} icons for "{{ $search }}"
                    @else
                        {{ $total }} icons available
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="main-content">
            <div class="icons-grid">
                @foreach($icons as $iconName)
                    <div class="icon-card">
                        <div class="icon-header">
                            <div class="icon-preview">
                                {!! TablerIcon::render($iconName) !!}
                            </div>
                            <div class="icon-name">{{ $iconName }}</div>
                        </div>

                        <div class="usage-methods">
                            <div class="usage-method">
                                <div class="method-label">Method 1: Facade</div>
                                @php
                                    $methodName = \VigStudio\TablerIcons\TablerIcon::convertIconNameToMethodName($iconName);
                                    $facadeCode = "{!! TablerIcon::" . $methodName . "(['class' => 'icon']) !!}";
                                @endphp
                                <div class="method-code">{{ $facadeCode }}</div>
                            </div>

                            <div class="usage-method">
                                <div class="method-label">Method 2: Helper Function</div>
                                @php
                                    $helperCode = "{!! tabler_icon('" . $iconName . "', ['class' => 'icon']) !!}";
                                @endphp
                                <div class="method-code">{{ $helperCode }}</div>
                            </div>

                            <div class="usage-method">
                                <div class="method-label">Method 3: Blade Component</div>
                                @php
                                    $componentCode = "<x-tabler-icons::" . $iconName . " />";
                                @endphp
                                <div class="method-code">{{ $componentCode }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            @if($pagination['last_page'] > 1)
                <div class="pagination">
                    @if($pagination['has_prev'])
                        <a href="?page={{ $pagination['prev_page'] }}{{ $search ? '&search=' . urlencode($search) : '' }}">← Previous</a>
                    @else
                        <span class="disabled">← Previous</span>
                    @endif

                    <span class="current">Page {{ $pagination['current_page'] }} of {{ $pagination['last_page'] }}</span>

                    @if($pagination['has_next'])
                        <a href="?page={{ $pagination['next_page'] }}{{ $search ? '&search=' . urlencode($search) : '' }}">Next →</a>
                    @else
                        <span class="disabled">Next →</span>
                    @endif
                </div>
            @endif
        </div>
    </div>
</body>
</html>
