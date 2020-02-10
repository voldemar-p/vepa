
class Video {
    constructor() {
        this.openVideoButton = document.querySelector('.esilehe-video');
        this.closeVideoButton = document.querySelector('#video-close');
        this.iframe = document.querySelector('#video-iframe');
        this.timeOut = null;
        this.events();
    }

    events() {
        this.openVideoButton.addEventListener('click', this.videoOpen.bind(this));
        this.closeVideoButton.addEventListener('click', this.videoClose.bind(this));
        document.body.addEventListener('keydown', this.escapeVideo.bind(this));
    }

    videoOpen() {
        this.iframe.style.display = 'flex';
    }

    videoClose() {
        this.iframe.style.display = 'none';
    }

    escapeVideo(e) {
        if (e.keyCode == 27 && this.iframe.style.display === 'flex') {
            this.iframe.style.display = 'none';
        }
    }
}

export default Video;
