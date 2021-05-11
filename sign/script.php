<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script>
    // --------導覽列----------
    // overlayNav進場
    $('.nav_burgurBar_img').click(function() {

        let navPosition = {
            transform: 'translateY(0)'
        }

        $(".nav_overlayNav").css(navPosition);
    })

    // overlayNav退場
    $('.nav_closeBtn').click(function() {

        let navPosition = {
            transform: 'translateY(-2500px)',
            transition: '.7s'
        }

        $(".nav_overlayNav").css(navPosition);
    })


    //Login hide
    $('#registerbtn').click(function() {
        $('#loginCenter').modal('hide');
    })

    $('#passwordbtn').click(function() {
        $('#loginCenter').modal('hide');
    })


    // --------筊杯-動畫------------           
    let laugh = {
        "img": "./img/YanCup-02-1.png",
        "name": "笑筊",
        "hint": "求籤失敗，請重新求籤",
    };
    let yin = {
        "img": "./img/YanCup-03-1.png",
        "name": "陰筊",
        "hint": "求籤失敗，請重新求籤",

    };
    let san = {
        "img": "./img/YanCup-01-1.png",
        "name": "聖筊",
        "hint": "求籤成功，請查閱籤詩",
    };
    let please = [laugh, yin, san]
    var luckyNum = Math.floor(Math.random() * please.length);

    function getRandomImage() {
        return document.getElementById("lucky_Sign_animation05_1").innerHTML = '<img src="' + please[luckyNum].img + '" />' + '<h3>' + please[luckyNum].name + '</h3>',
            document.getElementById("lucky_result05_1").innerHTML = '<p>' + please[luckyNum].hint + '</p>';
    }


    $('.lucky_button01 .lucky_p4').click(function() {
        // --------求籤動畫--------
        // document.getElementById('YanCup').addEventListener('animationend', function () {
        //     $('#YanCup_1').css('visibility', 'visible');
        //     $('#YanCup_2').css('visibility', 'visible');
        //     $('#YanCup').css('visibility', 'hidden');
        // });
        // document.getElementById('YanCup_1').addEventListener('animationend', function () {
        //     $('#YanCup_1').css('visibility', 'hidden');
        //     $('#YanCup_2').css('visibility', 'hidden');
        //     $('#YanCup_3').css('visibility', 'visible');
        // });
        getRandomImage()
        console.log(please[luckyNum].name)
    })

    let failure = 0
    $('.lucky_button01 .lucky_p5').click(function() {
        if (please[luckyNum].name == '聖筊') {
            $('.lucky_p6').removeClass('nextstep')
            $('.lucky_p5').addClass('nextstep')
            $('.node6').addClass('stageColor').siblings().removeClass('stageColor')
            $('.lucky_Swipe_page p').text('06')
        } else {
            luckyNum = Math.floor(Math.random() * please.length);
            getRandomImage(luckyNum);
            failure++;
            console.log(failure)

        }
    })



    // 選願望動畫
    let chosen = document.getElementsByClassName('clickIcon')
    console.log(chosen.length)
    $('.unit').click(function() {
        $(this).children('.pic').toggleClass('clickIcon')
        $(this).siblings().children('.pic').removeClass('clickIcon')
        $(this).find('path').attr('fill', function(index, attr) {
            return attr == "white" ? "#cc543a" : "white";
        });
        $(this).siblings().find('path').attr('fill', '#cc543a')

    })

    $('.lucky_button01 .lucky_p2').click(function() {

        console.log(chosen.length)
        if (chosen.length > 0) {
            let boxleft = $('.wishes').position().left
            let boxtop = $('.wishes').position().top
            let boxheight = $('.wishes').height()
            let boxwidth = $('.wishes').width()
            let chosenleft = $(chosen).parent().position().left
            let chosentop = $(chosen).parent().position().top
            $(chosen).parent().css({
                left: chosenleft + 'px',
                top: chosentop + 'px'
            })
            $(chosen).parent().siblings().css('opacity', '0')
            $(chosen).siblings().css('opacity', '0')
            setTimeout(function() {
                $(chosen).parent().css({
                    position: 'absolute',
                    left: (boxleft + boxwidth / 2) + -30 + 'px',
                    top: (boxtop + boxheight / 2) + 'px',
                    transition: 2 + 's',
                    transform: 'scale(' + 3 + ')'
                })
            }, 1600);

            // setTimeout(function () {
            //     $('.lucky_p3').removeClass('nextstep')
            //     $('.lucky_p2').addClass('nextstep')
            //     $('.node3').addClass('stageColor').siblings().removeClass('stageColor')
            //     $('.lucky_Swipe_page p').text('03')

            // }, 4000);

            $(chosen).parent().on('transitionend', function() {
                $('.lucky_p3').removeClass('nextstep')
                $('.lucky_p2').addClass('nextstep')
                $('.node3').addClass('stageColor').siblings().removeClass('stageColor')
                $('.lucky_Swipe_page p').text('03')
            });


        } else {
            $('#quest').append('<p style="color:#cc543a; margin-left:30px; font-weight:bold">請選擇一項</p>')
        }
    })


    // 換頁
    function nextPage(i) {
        $('.lucky_button01 button').eq(i).click(
            function() {
                console.log($('.lucky_button01 button').length, i)
                $(`.lucky_p${i + 1}`).addClass('nextstep')
                $(`.lucky_p${i + 2}`).removeClass('nextstep')
                $(`.node${(i + 2)}`).addClass('stageColor').siblings().removeClass('stageColor')
                $('.lucky_Swipe_page p').text(`0${(i + 2)}`)
            }
        )
    }
    var itemNum = $('.lucky_button01 button').length
    for (i = 0; i < itemNum; i++) {
        if (i == 1) continue;
        else if (i == 4) continue;
        nextPage(i);
    }
    //------神明圖片切換------
    const obj = document.getElementById('gods');
    const gods = document.querySelectorAll('#gods option'); //抓下拉是選單的文明文字
    const godImg = document.querySelector('.lucky_GodImg'); //抓藥更換的神明圖片位置

    $("#gods").change(function() {
        $(".lucky_GodImg img").attr('src', "./img/Gods/god00/" + $(this).val() + ".png")
    })




    // select.addEventListener('click', () => {
    //     console.log('hi01');
    //     gods.forEach(god => {
    //         god.addEventListener('click', () => {
    //             console.log('hi02');
    //             const originalSrc = god.getAttribute('data-gods');
    //             // 用getAttribute抓god裡的data-gods屬性
    //             godImg.src = `./img/Gods/god00/${originalSrc}.png`;

    //         });
    //     });
    // })


    // --------求籤步驟敘述增加--------
    const btn01 = document.getElementsByClassName('lucky_p1');
    const btn02 = document.getElementsByClassName('lucky_p2');
    const btn03 = document.getElementsByClassName('lucky_p3');
    const btn04 = document.getElementsByClassName('lucky_p4');
    const btn05 = document.getElementsByClassName('lucky_p5');
    console.log('btn01', btn01);
    const txt01 = document.createTextNode("求問類別介紹");
    // const icon = <i class="fas fa-chevron-right"></i>;
    // <i class="fas fa-chevron-right"></i>箭頭
    btn01[1].addEventListener('click', () => {
        console.log('hi');
        // <h6 class="lucky_Sign_order">線上求籤 <i class="fas fa-chevron-right"></i> 求問類別介紹</h6>
        $('.lucky_Sign_order').html($('.lucky_Sign_order').text() + `<i class="fas fa-chevron-right"></i> 求問類別介紹`)
        // $('.lucky_Sign_order').append(icon).appendChild(txt01);
        // .append(icon)
    });
    btn02[1].addEventListener('click', () => {
        console.log('hi'); //開始求籤
        $('.lucky_Sign_order').html($('.lucky_Sign_order').html() + `<i class="fas fa-chevron-right"></i> 開始求籤`)
    });
    btn03[1].addEventListener('click', () => {
        console.log('hi'); //神明賜籤

        $('.lucky_Sign_order').html($('.lucky_Sign_order').html() + `<i class="fas fa-chevron-right"></i> 神明賜籤`)
    });
    btn04[1].addEventListener('click', () => {
        console.log('hi'); //擲筊結果
        $('.lucky_Sign_order').html($('.lucky_Sign_order').html() + `<i class="fas fa-chevron-right"></i> 擲筊結果`)
    });
    btn05[1].addEventListener('click', () => {
        console.log('hi'); //籤詩涵義
        $('.lucky_Sign_order').html($('.lucky_Sign_order').html() + `<i class="fas fa-chevron-right"></i> 籤詩涵義`)
    });
</script>