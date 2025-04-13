import type { Config } from "tailwindcss";
import tailwindcssAnimate from "tailwindcss-animate";

export default {
	darkMode: ["class", "dark"],
	content: [
		"./pages/**/*.{html,js}",
		"./components/**/*.{html,js}",
		"./app/**/*.{html,js}",
		"./src/**/*.{html,js,ts,jsx,tsx,php}",
		"./index.html",
	],
	prefix: "",
	theme: {
		container: {
			center: true,
			padding: '2rem',
			screens: {
				'2xl': '1400px'
			}
		},
		extend: {
			colors: {
				border: 'hsl(var(--border))',
				input: 'hsl(var(--input))',
				ring: 'hsl(var(--ring))',
				background: 'hsl(var(--background))',
				foreground: 'hsl(var(--foreground))',
				primary: {
					DEFAULT: 'hsl(var(--primary))',
					foreground: 'hsl(var(--primary-foreground))'
				},
				secondary: {
					DEFAULT: 'hsl(var(--secondary))',
					foreground: 'hsl(var(--secondary-foreground))'
				},
				destructive: {
					DEFAULT: 'hsl(var(--destructive))',
					foreground: 'hsl(var(--destructive-foreground))'
				},
				muted: {
					DEFAULT: 'hsl(var(--muted))',
					foreground: 'hsl(var(--muted-foreground))'
				},
				accent: {
					DEFAULT: 'hsl(var(--accent))',
					foreground: 'hsl(var(--accent-foreground))'
				},
				popover: {
					DEFAULT: 'hsl(var(--popover))',
					foreground: 'hsl(var(--popover-foreground))'
				},
				card: {
					DEFAULT: 'hsl(var(--card))',
					foreground: 'hsl(var(--card-foreground))'
				},
				earth: {
					100: '#f1f8e9',
					200: '#dcedc8',
					300: '#c5e1a5',
					400: '#aed581',
					500: '#8bc34a',
					600: '#7cb342',
					700: '#689f38',
					800: '#558b2f',
					900: '#33691e',
				},
				soil: {
					100: '#efebe9',
					200: '#d7ccc8',
					300: '#bcaaa4',
					400: '#a1887f',
					500: '#8d6e63',
					600: '#795548',
					700: '#6d4c41',
					800: '#5d4037',
					900: '#3e2723',
				},
				gold: {
					100: '#fff8e1',
					200: '#ffecb3',
					300: '#ffe082',
					400: '#ffd54f',
					500: '#ffca28',
					600: '#ffc107',
					700: '#ffb300',
					800: '#ffa000',
					900: '#ff8f00',
				},
				gov: {
					100: '#e3f2fd',
					200: '#bbdefb',
					300: '#90caf9',
					400: '#64b5f6',
					500: '#42a5f5',
					600: '#2196f3',
					700: '#1e88e5',
					800: '#1976d2',
					900: '#1565c0',
				}
			},
			borderRadius: {
				lg: 'var(--radius)',
				md: 'calc(var(--radius) - 2px)',
				sm: 'calc(var(--radius) - 4px)'
			},
			keyframes: {
				"accordion-down": {
					from: { height: "0" },
					to: { height: "var(--radix-accordion-content-height)" },
				},
				"accordion-up": {
					from: { height: "var(--radix-accordion-content-height)" },
					to: { height: "0" },
				},
				fadeIn: {
					'0%': { opacity: '0' },
					'100%': { opacity: '1' }
				},
				slideUp: {
					'0%': { transform: 'translateY(20px)', opacity: '0' },
					'100%': { transform: 'translateY(0)', opacity: '1' }
				},
				pulse: {
					'0%, 100%': {
						opacity: 1
					},
					'50%': {
						opacity: 0.7
					}
				}
			},
			animation: {
				"accordion-down": "accordion-down 0.2s ease-out",
				"accordion-up": "accordion-up 0.2s ease-out",
				"fadeIn": "fadeIn 0.5s ease-in-out",
				"slideUp": "slideUp 0.5s ease-out",
				"pulse": "pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite"
			}
		}
	},
	plugins: [tailwindcssAnimate],
} satisfies Config;
