import {
  round
} from '../utils.js'
import {
  getCenter,
  getAngle
} from '../vector.js'
export default class RotateRecognizer {

  constructor() {
    this.type = 'rotateend';
    this.$fingerInput = {};
  };

  // start(fingerInput) {

  // };

  move(fingerInput) {
    this.$fingerInput = fingerInput;
    this.type = 'rotateend' === this.type ? 'rotatestart' : 'rotatemove';
    return this.type;
  };

  end(fingerInput) {
    this.$fingerInput = fingerInput;
    if ('rotateend' !== this.type)
      this.type = 'rotateend';
    return this.type;
  };

  // cancel() {}

  computedData() {
    if ('rotateend' === this.type) return {};
    else {
      // if ('rotatestart' === this.type) {
      //     let el = this.$fingerInput.nativeEvent.target;
      //     let {
      //         top,
      //         left
      //     } = el.getBoundingClientRect();
      //     log(`top: ${top}`, `left: ${left}`);
      // }
      const {
        x,
        y
      } = getCenter(this.$fingerInput.points);
      const angle = round(getAngle(this.$fingerInput.v, this.$fingerInput.prevV));

      return {
        type: this.type,
        belong: 'rotate',
        angle,
        centerX: round(x),
        centerY: round(y),
        nativeEvent: this.$fingerInput.nativeEvent,
      }
    }
  }
};
