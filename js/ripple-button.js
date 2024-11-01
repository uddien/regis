let animation_ripples = [];
var animation_fade;

let for_ripple = document.querySelectorAll(".for_ripple");
for_ripple.forEach(function (target) {
    target.addEventListener("mousedown", (event) => {
        let ripple_width = event.currentTarget.clientWidth * 2.3;
        let current = event.currentTarget;

        if (current.tagName == "BUTTON") {
            current.classList.add("btn_active");
        }

        current.insertAdjacentHTML(
            "afterbegin",
            '<div class="ripple" style="left:' +
            event.offsetX +
            "px;top:" +
            event.offsetY +
            "px;width:" +
            ripple_width +
            "px;height:" +
            ripple_width +
            'px;"></div>'
        );

        const ripple_objects = Array.from(
            document.querySelectorAll(".for_ripple > .ripple")
        );
        ripple_objects.forEach(function (anim_target) {
            ripple_objects.shift();
            animation_ripples.push(
                anim_target.animate(
                    {
                        width: [0, ripple_width + "px"],
                        height: [0, ripple_width + "px"],
                        borderRadius: ["9999px", "9999px"],
                        background: [
                            'radial-gradient(circle closest-side, #ffffff35 0%, transparent), url("https://drive.google.com/uc?export=view&id=1O_UEy30KjTQO42qRIw_oq7LW0Kw8R-Un") repeat center / 50px 50px',
                            "radial-gradient(circle closest-side, #ffffff35 80%, transparent)"
                        ]
                    },
                    {
                        fill: "forwards",
                        duration: 400,
                        easing: "cubic-bezier(0.4, 0, 0.2, 1)"
                    }
                )
            );
        });
    });
});

for_ripple.forEach(function (target) {
    target.addEventListener("mouseup", (event) => {
        animation_ripples.forEach(function (anim_target) {
            anim_target.finished.then(function () {
                animation_fade = anim_target.effect.target.animate(
                    {
                        opacity: [1, 0]
                    },
                    {
                        fill: "forwards",
                        duration: 280,
                        easing: "cubic-bezier(0, 0.55, 0.45, 1)"
                    }
                );
                animation_fade.finished.then(function () {
                    var el = anim_target.effect.target.remove();
                    document.querySelector(".btn").classList.remove("btn_active");
                });
            });
        });
    });
});