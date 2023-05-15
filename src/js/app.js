import '../scss/app.scss';
import 'focus-visible';

// HMR Support
if (import.meta.hot) {
  import.meta.hot.accept(() => {
    console.log('HMR');
  });
}
