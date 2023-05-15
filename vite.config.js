import ViteRestart from 'vite-plugin-restart';

export default ({ command }) => ({
  base: command === 'serve' ? '' : '/dist/',
  publicDir: './src/public/',
  build: {
    manifest: true,
    outDir: './public_html/app/themes/foundation/dist/',
    rollupOptions: {
      input: {
        app: './src/js/app.js',
      },
    },
  },
  server: {
    fs: {
      strict: false,
    },
    origin: 'http://localhost:3000',
    port: 3000,
    stricPort: true,
  },
  plugins: [
    ViteRestart({
      reload: [
        './public_html/app/themes/foundation/**/*.php',
        './public_html/app/themes/foundation/**/*.js',
        './public_html/app/themes/foundation/**/*.css',
      ],
    }),
  ],
});
