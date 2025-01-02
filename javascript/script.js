// ハンバーガ―メニュー
const hamburgerMenu = document.querySelector(".hamburger-menu");
const navi = document.getElementById("hamburger-navigation");

hamburgerMenu.addEventListener("click", function () {
  hamburgerMenu.classList.toggle("active");
  navi.classList.toggle("active");
});

navi.addEventListener("click", function () {
  hamburgerMenu.classList.toggle("active");
  navi.classList.toggle("active");
});

//フェードイン
let fadeInTarget = document.querySelectorAll(".fade-in");
window.addEventListener("scroll", () => {
  for (let i = 0; i < fadeInTarget.length; i++) {
    const rect = fadeInTarget[i].getBoundingClientRect().top;
    const scroll = window.pageYOffset || document.documentElement.scrollTop;
    const offset = rect + scroll;
    const windowHeight = window.innerHeight; // 現在のブラウザの高さ
    if (scroll > offset - windowHeight + 200) {
      fadeInTarget[i].classList.add("scroll-in");
    }
  }
});

let fadeInTarget2 = document.querySelectorAll(".fade-in2");

function checkFadeIn() {
  let scroll = window.pageYOffset || document.documentElement.scrollTop;
  if (scroll > 1000) {
    // ～pxスクロールしたら
    for (let i = 0; i < fadeInTarget2.length; i++) {
      fadeInTarget2[i].classList.add("scroll-in");
    }
    window.removeEventListener("scroll", checkFadeIn);
  }
}

window.addEventListener("scroll", checkFadeIn);

//アコーディオン
// const parentMenu = document.querySelectorAll(".faq__link--menu");
// for (let i = 0; i < parentMenu.length; i++) {
//   parentMenu[i].addEventListener("click", function (e) {
//     e.preventDefault();
//     this.classList.toggle("active");
//     this.nextElementSibling.classList.toggle("active");
//   });
// }
document.addEventListener("DOMContentLoaded", function () {
  const questionButtons = document.querySelectorAll(".faq__tabTextQuestion");
  questionButtons.forEach((button) => {
    button.addEventListener("click", () => toggleAnswer(button));
  });

  const toggleAnswer = (clickedButton) => {
    const allAnswers = document.querySelectorAll(".faq__tabTextAnswer");
    const clickedAnswer = clickedButton.nextElementSibling;

    if (clickedAnswer.classList.contains("acdn_open")) {
      clickedAnswer.style.maxHeight = null; // 高さをリセット
      clickedAnswer.classList.remove("acdn_open");
      clickedAnswer.classList.add("acdn_close");
      clickedButton.classList.remove("acdn_open");
      clickedButton.classList.add("acdn_close");
    } else {
      allAnswers.forEach((answer) => {
        answer.style.maxHeight = null; // 高さをリセット
        answer.classList.remove("acdn_open");
        answer.classList.add("acdn_close");
      });
      clickedAnswer.classList.remove("acdn_close");
      clickedAnswer.classList.add("acdn_open");

      const allQuestions = document.querySelectorAll(".faq__tabTextQuestion");
      allQuestions.forEach((question) => {
        question.classList.remove("acdn_open");
        question.classList.add("acdn_close");
      });

      // 開く回答の高さを設定
      const ulElement = clickedAnswer.querySelector("ul");
      const ulHeight = ulElement.scrollHeight; // ulの実際の高さを取得
      clickedAnswer.style.maxHeight = `${ulHeight + 32}px`; // 32px の padding を追加

      clickedButton.classList.remove("acdn_close");
      clickedButton.classList.add("acdn_open");
    }
  };
});

//ローディングアニメーション
class Main {
  constructor() {
    this._loading();
  }

  _loading() {
    document.addEventListener("DOMContentLoaded", () => {
      const webStorage = () => {
        const lodingContainer = document.querySelector(
          ".loding__container--whole"
        );
        const lodingContainer2 = document.querySelector(".loding__thumb--logo");
        const lodingContainer3 = document.querySelector(
          ".loding__wrap--display-on"
        );

        if (sessionStorage.getItem("access")) {
          // 2回目以降アクセス時の処理
          // 最初から必要なクラスを持たせる
          if (lodingContainer) {
            lodingContainer.style.display = "none";
          }
        } else {
          // 初回アクセス時の処理
          sessionStorage.setItem("access", "true");
          // 初回アクセス時に .show-loading クラスを追加
          if (lodingContainer) {
            lodingContainer.classList.add("show-loading");
          }

          // クラスを削除する処理
          const removeClasses = (delay) => {
            setTimeout(() => {
              if (lodingContainer)
                lodingContainer.classList.remove("loding__container--whole");
              if (lodingContainer2)
                lodingContainer2.classList.remove("loding__thumb--logo");
              if (lodingContainer3)
                lodingContainer3.classList.remove("loding__wrap--display-on");
            }, delay);
          };

          // クラスを追加する処理
          const addClass = (delay) => {
            setTimeout(() => {
              if (lodingContainer)
                lodingContainer.classList.add("loding__container--whole-off");
            }, delay);
          };

          removeClasses(3000);
          addClass(2000);
        }
      };

      webStorage();
    });
  }
}

new Main();
