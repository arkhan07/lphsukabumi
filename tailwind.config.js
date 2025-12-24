/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  safelist: [
    // ============ ARBITRARY VALUES ============
    // Width arbitrary
    { pattern: /w-\[[\w%]+\]/, variants: ['lg', 'md', 'sm'] },
    
    // Colors arbitrary
    { pattern: /bg-\[#[0-9A-Fa-f]{6,8}\]/ },
    { pattern: /text-\[#[0-9A-Fa-f]{6,8}\]/ },
    { pattern: /border-\[#[0-9A-Fa-f]{6,8}\]/ },
    { pattern: /from-\[#[0-9A-Fa-f]{6,8}\]/ },
    { pattern: /to-\[#[0-9A-Fa-f]{6,8}\]/ },

    // Shadow arbitrary
    { pattern: /shadow-\[[\w\d\s,_\-().]+\]/ },

    // Padding & margin arbitrary
    { pattern: /p[lrtbxy]?-\[\d+px\]/ },
    { pattern: /m[lrtbxy]?-\[\d+px\]/ },
    
    // Positioning arbitrary
    { pattern: /-?(top|left|right|bottom)-\[\d+px\]/ },
    
    // ============ CUSTOM THEME COLORS ============
    'bg-darkteal',
    'bg-darkgreen',
    'bg-turqoise',
    'bg-deepturqoise',
    'bg-emerald',
    'bg-lightsage',
    'bg-goldenrod',
    'text-darkteal',
    'text-darkgreen',
    'text-turqoise',
    'text-deepturqoise',
    'text-emerald',
    'text-lightsage',
    'text-goldenrod',
    'border-darkteal',
    'border-darkgreen',
    'border-turqoise',
    'border-deepturqoise',
    'hover:bg-darkteal',
    'hover:bg-darkgreen',
    'hover:bg-turqoise',
    'hover:text-white',
    'hover:text-darkteal',
    'hover:text-darkgreen',
    'focus:bg-darkteal',
    'focus:text-white',
    
    // ============ BACKGROUND COLORS ============
    'bg-[#E6E6E670]',
    'bg-[#0E524210]',
    'bg-[#166F61]',
    'bg-[#0E5242]',
    'bg-green-50',
    'bg-green-100',
    'bg-green-700',
    'bg-gray-50',
    'bg-gray-100',
    'bg-gray-200',
    'bg-gray-300',
    'bg-gray-800',
    'bg-white',
    'bg-red-100',
    'bg-red-500',
    'bg-red-600 ',
    'bg-yellow-100',
    'bg-yellow-300',
    'bg-yellow-400',
    'bg-yellow-500',
    'bg-white/10',
    'hover:bg-gray-50',
    'hover:bg-gray-100',
    'hover:bg-[#125954]',
    'hover:bg-teal-900/30',
    'hover:bg-green-700',
    'hover:bg-green-800',
    'hover:bg-opacity-90',
    
    // ============ TEXT COLORS ============
    'text-gray-300',
    'text-gray-500',
    'text-gray-600',
    'text-gray-700',
    'text-gray-800',
    'text-gray-900',
    'text-green-600',
    'text-green-700',
    'text-green-800',
    'text-green-900',
    'text-red-500',
    'text-yellow-300',
    'text-yellow-400',
    'text-yellow-500',
    'text-white',
    'text-[#0E5242]',
    'text-[#123e3a]',
    'text-[#147B75]',
    'hover:text-yellow-400',
    'hover:text-yellow-500',
    'hover:text-white',
    'hover:text-green-800',
    
    // ============ BORDER COLORS ============
    'border-gray-200',
    'border-gray-300',
    'border-gray-600',
    'border-gray-700',
    'border-green-200',
    'border-green-700',
    'border-teal-300/20',
    'border-teal-300/30',
    'border-transparent',
    'border-[#147B75]',
    'border-[#E6E6E670]',
    
    // ============ WIDTHS ============
    'w-1/2',
    'w-1/3',
    'w-1/4',
    'w-2/3',
    'w-2/5',
    'w-3/4',
    'w-3/5',
    'w-4/5',
    'md:w-4/5',
    'w-5/6',
    'w-full',
    'w-fit',
    'w-100',
    'w-3/12',
    'w-3',
    'w-4',
    'w-5',
    'w-6',
    'w-7',
    'w-8',
    'w-10',
    'w-12',
    'w-13',
    'w-14',
    'w-16',
    'w-18',
    'w-21',
    'w-23',
    'w-25',
    'w-30',
    'w-32',
    'w-64',
    'w-72',
    'w-[50px]',
    'w-[85%]',
    'w-[120px]',
    'w-[140px]',
    'w-[150px]',
    'w-[180px]',
    'w-[200px]',
    'w-[220px]',
    'w-[230px]',
    'md:w-1/2',
    'md:w-1/3',
    'md:w-1/4',
    'md:w-2/3',
    'md:w-2/5',
    'md:w-3/4',
    'md:w-3/5',
    'md:w-4/5',
    'md:w-5/6',
    'md:w-[15%]',
    'md:w-[20%]',
    'lg:w-[150px]',
    'max-w-[140px]',
    'max-w-[150px]',
    'max-w-[180px]',
    'max-w-[200px]',
    'max-w-[220px]',
    'max-w-[230px]',
    'max-w-10xl',
    'min-w-max',
    'min-w-full',
    'min-w-[150px]',
    'min-w-[700px]',
    'min-w-[800px]',
    'lg:w-4/5',
    'xl:w-3/4',
    
    // ============ HEIGHTS ============
    'h-1',
    'h-4',
    'h-5',
    'h-6',
    'h-8',
    'h-10',
    'h-12',
    'h-14',
    'h-16',
    'h-full',
    'h-[250px]',
    'min-h-[50px]',
    
    // ============ TEXT SIZES ============
    'text-[10px]',
    'text-xs',
    'text-sm',
    'text-base',
    'text-lg',
    'text-xl',
    'text-2xl',
    'text-3xl',
    'text-4xl',
    'md:text-base',
    'md:text-lg',
    'md:text-xl',
    'md:text-2xl',
    'md:text-3xl',
    'md:text-4xl',
    
    // ============ FONT WEIGHTS ============
    'font-medium',
    'font-semibold',
    'font-bold',
    
    // ============ ROUNDED CORNERS ============
    'rounded',
    'rounded-3xl',
    'rounded-sm',
    'rounded-md',
    'rounded-lg',
    'rounded-xl',
    'rounded-full',
    'rounded-s-lg',
    'rounded-e-lg',
    'rounded-tl-xl',
    'rounded-tr-xl',
    'rounded-2xl',

    // ============ PADDING ============
    'p-1',
    'p-2',
    'p-3',
    'p-4',
    'p-5',
    'p-6',
    'p-8',
    'p-10',
    'py-0.5',
    'py-1',
    'py-1.5',
    'py-2',
    'py-2.5',
    'py-3',
    'py-4',
    'py-5',
    'py-6',
    'py-8',
    'py-10',
    'py-12',
    'py-20',
    'px-2',
    'px-3',
    'px-4',
    'px-6',
    'px-7',
    'px-8',
    'px-16',
    'pl-4',
    'pl-6',
    'pl-12',
    'pl-16',
    'pl-20',
    'pr-6',
    'pr-12',
    'pb-2',
    'pb-4',
    'pb-5',
    'pt-4',
    
    // ============ MARGIN ============
    'my-1',
    'my-2',
    'my-3',
    'my-5',
    'my-6',
    'my-8',
    'my-10',
    'my-12',
    'my-16',
    'my-20',
    'mt-1',
    'mt-2',
    'mt-3',
    'mt-4',
    'mt-5',
    'mt-6',
    'mt-8',
    'mt-10',
    'mt-12',
    'mt-16',
    'mt-20',
    'mt-40',
    'mb-1',
    'mb-2',
    'mb-3',
    'mb-4',
    'mb-5',
    'mb-6',
    'mb-8',
    'mb-10',
    'mb-12',
    'mb-16',
    'mr-1',
    'mr-2',
    'mr-3',
    'ml-1',
    'ml-2',
    'ms-auto',
    'me-auto',
    'ms-12',
    'mx-auto',
    '-translate-x-1/2',
    
    // ============ TRANSFORM & TRANSITIONS ============
    '-translate-y-1',
    'rotate-0',
    'rotate-90',
    'transform',
    'transition',
    'transition-all',
    'transition-transform',
    'transition-colors',
    'transition-opacity',
    'transition-shadow',
    'duration-150',
    'duration-200',
    'duration-300',
    'duration-500',
    'hover:scale-105',
    'hover:scale-110',
    'hover:scale-[1.02]',
    'hover:scale-[1.03]',
    
    // ============ FLEXBOX & GRID ============
    'flex',
    'flex-col',
    'flex-row',
    'flex-wrap',
    'flex-nowrap',
    'flex-shrink-0',
    'flex-grow',
    'inline-flex',
    'items-center',
    'items-start',
    'items-end',
    'justify-center',
    'justify-between',
    'justify-end',
    'justify-start',
    'gap-1',
    'gap-2',
    'gap-3',
    'gap-4',
    'gap-5',
    'gap-6',
    'gap-7',
    'gap-8',
    'gap-10',
    'gap-x-3',
    'gap-y-1',
    'gap-y-2',
    'gap-y-4',
    'grid',
    'grid-cols-1',
    'grid-cols-2',
    'grid-cols-3',
    'grid-cols-4',
    'md:grid-cols-2',
    'md:grid-cols-3',
    'sm:grid-cols-3',
    
    // ============ SPACING ============
    'space-x-1',
    'space-x-2',
    'space-x-4',
    'space-y-1',
    'space-y-2',
    'space-y-4',
    'space-y-5',
    
    // ============ DISPLAY ============
    'hidden',
    'block',
    'inline',
    'inline-block',
    'md:flex',
    'md:flex-row',
    'lg:flex',
    
    // ============ OVERFLOW ============
    'overflow-x-auto',
    'overflow-hidden',
    
    // ============ Z-INDEX ============
    'z-10',
    
    // ============ OPACITY ============
    'opacity-0',
    'opacity-90',
    'group-hover:opacity-100',
    
    // ============ SHADOW ============
    'shadow',
    'shadow-sm',
    'shadow-md',
    'shadow-lg',
    'shadow-xl',
    'hover:shadow-md',
    
    // ============ DIVIDE ============
    'divide-y',
    'divide-gray-200',
    
    // ============ BORDER ============
    'border',
    'border-2',
    'border-4',
    'border-t',
    'border-b',
    
    // ============ POSITIONING ============
    'absolute',
    'relative',
    'inset-x-0',
    '-top-4',
    '-top-8',
    'bottom-6',
    'left-1/2',
    
    // ============ MIN/MAX WIDTHS ============
    'min-w-full',
    'min-w-[800px]',
    'max-w-xs',
    'max-w-2xl',
    'max-w-3xl',
    'max-w-4xl',
    'max-w-5xl',
    'max-w-6xl',
    'max-w-7xl',
    
    // ============ CURSOR ============
    'cursor-pointer',
    
    // ============ LIST STYLE ============
    'list-none',
    
    // ============ ANIMATION ============
    'animate-infinite-scroll',
    'animate-pulse-zoom',
    
    // ============ MASK ============
    '[mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-200px),transparent_100%)]',
    
    // ============ FOCUS STYLES ============
    'focus:outline-none',
    'focus:ring-2',
    'focus:ring-offset-2',
    'focus:ring-darkteal',
    'focus:ring-green-500',
    
    // ============ TRACKING ============
    'tracking-wider',
    
    // ============ LEADING ============
    'leading-relaxed',
    'leading-tight',
    
    // ============ UPPERCASE ============
    'uppercase',
    
    // ============ TEXT ALIGNMENT ============
    'text-left',
    'text-center',
    'text-right',
    'md:text-left',
    
    // ============ WHITESPACE ============
    'whitespace-nowrap',
    
    // ============ ITALIC ============
    'italic',
    
    // ============ UNDERLINE ============
    'underline',
    
    // ============ OBJECT FIT ============
    'object-contain',
    
    // ============ SCREEN READER ONLY ============
    'sr-only',
    
    // ============ INVISIBLE ============
    'invisible',
    
    // ============ DARK MODE VARIANTS ============
    'dark:bg-gray-800',
    'dark:border-gray-600',
    'dark:text-gray-400',
    
    // ============ ADDITIONAL UTILITIES ============
    'align-items-center',
    'container',
    'mx-auto',
    'min-w-max',
    
    // ============ STROKE ============
    'stroke-currentColor',
    'stroke-width-1.5',
    'stroke-width-2',
    'stroke-width-2.5',
    
    // ============ FILL ============
    'fill-none',
    'fill-currentColor',
    'fill-white',
    
    // ============ VIEWBOX ============
    'viewBox',
    
    // ============ ADDITIONAL RESPONSIVE ============
    'md:px-32',
    'md:my-16',
    'md:mb-4',
    'md:mt-20',
    'md:text-center',
    'md:mb-0',
    'md:me-auto',
    'md:ms-auto',
    'sm:px-6',
    'lg:px-8',
    
    // ============ ARIA HIDDEN ============
    'aria-hidden',

    // ============ COLLAPSE/BORDER RELATED ============
    'border-collapse',
    'divide-x',
    'divide-x-2',
    
    // ============ GROUP UTILITIES ============
    'group',
    'group-hover:text-yellow-500',
    'group-hover:opacity-100',

    // ============ CUSTOM UTILITIES ============
    'scrollbar-hide',
  ],
  theme: {
    extend: {
      colors: {
        darkgreen: "#0E5242",
        darkteal: "#166F61",
        turqoise: "#18A37E",
        deepturqoise: "#0F3D3E",
        emerald: "#129E4A",
        lightsage: "#C4D8A150",
        goldenrod: "#FDC500",
      },
      fontFamily: {
        poppins: ["Poppins", "sans-serif"],
      },
      listStyleImage: {
        check: 'url("/img/check.svg")',
        checkfill: 'url("/img/checkfill.png")',
      },
      animation: {
        'infinite-scroll': 'infinite-scroll 25s linear infinite',
        'text-slide-4': 'text-slide-4 10s cubic-bezier(0.83, 0, 0.17, 1) infinite',
      },
      keyframes: {
        'infinite-scroll': {
          from: { transform: 'translateX(0)' },
          to: { transform: 'translateX(-100%)' },
        },
        'text-slide-4': {
          '0%, 25%': { transform: 'translateY(0%)' },
          '30%, 50%': { transform: 'translateY(-25%)' },
          '55%, 75%': { transform: 'translateY(-50%)' },
          '80%, 99%': { transform: 'translateY(-75%)' },
          '100%': { transform: 'translateY(0%)' },
        },
      },
      spacing: {
        '13': '3.25rem',
        '23': '5.75rem', 
      },
      width: {
        '100': '100%',
      },
      borderRadius: {
        '2xl': '1rem',
      },
      boxShadow: {
        'saff-glow': '0 4px 12px rgba(22, 111, 97, 0.3)',
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}