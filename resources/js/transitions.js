 tailwind.config = {
      theme: {
        extend: {
           screens: {
        'mid': '960px', 
      },
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
            arial: ['Arial', 'Helvetica', 'sans-serif'],
          },
          keyframes: {
            fadeIn: { '0%': { opacity: '0' }, '100%': { opacity: '1' } },
            slideIn: { '0%': { transform: 'translateX(160px)', opacity: '0' }, '100%': { transform: 'translateX(0)', opacity: '1' } },
            growUp: { '0%': { transform: 'scaleY(0)' }, '100%': { transform: 'scaleY(1)' } },
            float: {
              '0%, 100%': { transform: 'translateY(0px)' },
              '50%': { transform: 'translateY(-20px)' },
            },
            pulseGlow: {
              '0%, 100%': { opacity: '0.15' },
              '50%': { opacity: '0.25' },
            },
            slideUp: {
              '0%': { opacity: '0', transform: 'translateY(30px)' },
              '100%': { opacity: '1', transform: 'translateY(0)' },
            }
          },
          animation: {
            fadeIn: 'fadeIn 5s ease-in-out forwards',
            slideIn: 'slideIn 2s cubic-bezier(0.65, 0, 0.35, 1) forwards',
            growUp: 'growUp 2.5s cubic-bezier(0.68, -0.55, 0.27, 1.55) forwards',
            'float': 'float 8s ease-in-out infinite',
            'float-delayed': 'float 10s ease-in-out infinite 2s',
            'pulse-glow': 'pulseGlow 3s ease-in-out infinite',
            'slideUp': 'slideUp 0.8s ease-out',
          },
        },
      },
    }