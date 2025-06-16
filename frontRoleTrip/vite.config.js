import { defineConfig } from 'vite'
import path from 'path'
import { fileURLToPath } from 'url';
import svgr from 'vite-plugin-svgr';

const __dirname = path.dirname(fileURLToPath(import.meta.url));

export default defineConfig({
  root: path.resolve(__dirname, './'), // Garante que a raiz está correta
  build: {
    outDir: 'dist',
     plugins: [svgr()],
    emptyOutDir: true
  }
})