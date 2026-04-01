<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $pageTitle ?? 'LLM Board' ?></title>
  <meta name="description" content="<?= $pageDescription ?? 'LLM Board — Multi-Model AI Deliberation' ?>">
  <link rel="icon" type="image/svg+xml" href="/favicon.svg">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            display: ['"Instrument Serif"', 'serif'],
            body: ['Outfit', 'sans-serif'],
          },
          colors: {
            base: { DEFAULT: '#09090B', 50: '#0E0E11', 100: '#131316', 200: '#1C1C21', 300: '#27272A' },
            accent: { DEFAULT: '#10B981', light: '#34D399', dim: '#059669' },
          }
        }
      }
    }
  </script>
  <style>
    body { background: #09090B; color: #d4d4d8; }
    .legal h2 { color: #fafafa; font-size: 1.25rem; font-weight: 600; margin-top: 2.5rem; margin-bottom: 0.75rem; }
    .legal h3 { color: #e4e4e7; font-size: 1.05rem; font-weight: 600; margin-top: 1.75rem; margin-bottom: 0.5rem; }
    .legal p { margin-bottom: 1rem; line-height: 1.75; }
    .legal ul { list-style: disc; padding-left: 1.5rem; margin-bottom: 1rem; }
    .legal li { margin-bottom: 0.35rem; line-height: 1.7; }
    .legal a { color: #34D399; text-decoration: underline; text-underline-offset: 2px; }
    .legal a:hover { color: #6EE7B7; }
  </style>
</head>
<body class="font-body antialiased">

  <nav class="fixed top-0 left-0 right-0 z-50" style="background: rgba(9,9,11,0.85); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px);">
    <div class="max-w-3xl mx-auto flex items-center justify-between px-6 h-16">
      <a href="/" class="flex items-center gap-2.5">
        <svg width="24" height="24" viewBox="0 0 28 28" fill="none">
          <rect x="2" y="2" width="10" height="10" rx="2" fill="#10B981" opacity="0.9"/>
          <rect x="16" y="2" width="10" height="10" rx="2" fill="#10B981" opacity="0.5"/>
          <rect x="2" y="16" width="10" height="10" rx="2" fill="#10B981" opacity="0.5"/>
          <rect x="16" y="16" width="10" height="10" rx="2" fill="#10B981" opacity="0.3"/>
        </svg>
        <span class="font-semibold text-[15px] tracking-tight text-white/90">LLM Board</span>
      </a>
      <a href="/" class="text-[13px] text-white/50 hover:text-white/90 transition-colors">&larr; Back to home</a>
    </div>
  </nav>
