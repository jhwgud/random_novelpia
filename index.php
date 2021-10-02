<?php
    echo "test"
    <script>        
      function openRandomNovel() {
        let random = Math.floor(Math.random() * (52000 - 1) + 1);
        window.open(`https://novelpia.com/novel/${random}`, "_blank");
      }
    </script>

?>
