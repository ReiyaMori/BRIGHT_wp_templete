<?php get_header()?>
<main>
    <div id="spacer"></div>
    <h1>404 NOT FOUND<h1>
    <section>
        <div class="section-container">
            <p><span id="second">5</span>秒後に自動的に<a href="<?= home_url()?>">トップページ</a>へ戻ります</p>
        </div>
    </section>
    <script>
        $(function(){
            cnt = 5; //5秒前からカウントスタート
            $('#second').text(cnt);
            cnDown = setInterval(function(){ //1秒おきにカウントマイナス
                cnt--;
                if(cnt <= 0){//0になったら停止する
                    clearInterval(cnDown);
                    window.location.href = '<?= home_url()?>';
                }
                $('#second').text(cnt);
            },1000);
        });
    </script>
</main>
<?php get_footer()?>