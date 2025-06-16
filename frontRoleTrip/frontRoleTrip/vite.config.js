import { defineConfig } from 'vite'
import path from 'path'
import { fileURLToPath } from 'url';

const __dirname = path.dirname(fileURLToPath(import.meta.url));

export default defineConfig({
  root: path.resolve(__dirname, './'), // Garante que a raiz está correta
  build: {
    outDir: 'dist',
    emptyOutDir: true
  }
})