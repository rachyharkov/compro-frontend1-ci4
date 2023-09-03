<style>
  .dot_slide_down {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100px;
  }

  .pill {
    position: absolute;
    top: 0;
    left: 50%;
    width: 30px;
    height: 50px;
    border-radius: 20px;
    background-color: #fff;
    transform: translate(-50%, -50%);
  }

  .dot_slide_down {
    animation: dot_slide_down 2s ease-in-out infinite;
  }

  @keyframes dot_slide_down {
    0% {
      transform: translateY(100px);
      opacity: 0;
    }

    15% {
      opacity: 1;
    }

    50% {
      transform: translateY(0);
    }

    85% {
      opacity: 1;
    }

    100% {
      transform: translateY(-100px);
      opacity: 0;
    }
  }

  .line-vertical {
    position: absolute;
    top: -100%;
    left: 50%;
    width: 1px;
    height: 200px;
    background-color: #fff;
    transform: translateX(-50%);
  }
</style>

<div class="position-absolute top-0" style="height: 100px; left: 50%;">
  <div class="line-vertical"></div>
  <div class="dot_slide_down">
    <div class="pill"></div>
  </div>
</div>