<?php

    class notificationC{

        public static function showNotification($menssage, $type){
            echo '<script>
                    Toastify({
                        text: "'.$menssage.'",
                        duration: 2000,
                        destination: "mailto:biblioteca@tesorosdedios.org",
                        newWindow: true,
                        close: true,
                        gravity: "bottom", // `top` or `bottom`
                        position: "right", // `left`, `center` or `right`
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        style: {
                        background: "'.$type.'" == "success"? "green" : "red",
                        },
                        //onClick: function(){} // Callback after click
                    }).showToast();
                </script>';
        }
    }