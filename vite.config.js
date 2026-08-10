import { defineConfig } from 'vite'
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
  base: '',
  plugins: [
    tailwindcss(),
  ],
  build: {
    outDir: 'assets',
    emptyOutDir: false,
    rollupOptions: {
      input: {
        main: 'src/main.js',
        style: 'src/style.css'
      },
      output: {
        entryFileNames: 'js/[name].js',
        assetFileNames: (assetInfo) => {
          if (assetInfo.name && assetInfo.name.endsWith('.css')) {
            return 'css/tailwind.css';
          }
          if (assetInfo.name && (assetInfo.name.endsWith('.woff') || assetInfo.name.endsWith('.woff2') || assetInfo.name.endsWith('.ttf'))) {
            return 'fonts/[name].[ext]';
          }
          return 'css/[name].[ext]';
        }
      }
    }
  }
})

