<?php

function renderThemeToggler($checked = false)
{ ?>
    <div style="position: fixed; bottom: 25px; right: 25px;">
        <input type="checkbox" class="checkbox" id="checkbox">
        <label for="checkbox" class="label">
            <i class="fas fa-moon"></i>
            <i class='fas fa-sun'></i>
            <div class='ball'>
        </label>
    </div>
    <style type="text/css">
        .checkbox {
            opacity: 0;
            position: absolute;
        }

        .label {
            width: 50px;
            height: 26px;
            background-color: #111;
            display: flex;
            border-radius: 50px;
            align-items: center;
            justify-content: space-between;
            padding: 5px;
            position: relative;
            transform: scale(1.5);
        }

        .ball {
            width: 20px;
            height: 20px;
            background-color: white;
            position: absolute;
            top: 2px;
            left: 2px;
            border-radius: 50%;
            transition: transform 0.2s linear;
        }

        /*  target the elemenent after the label*/
        .checkbox:checked+.label .ball {
            transform: translateX(24px);
        }

        .fa-moon {
            color: pink;
        }

        .fa-sun {
            color: yellow;
        }

        @media screen and (max-width: 576px) {
            .label {
                transform: scale(1.15);
            }
        }
    </style>
    <script type="text/javascript">
        const checkbox = document.getElementById('checkbox');
        checkbox.checked = <?php echo $checked ? 1 : 0; ?> ? true : false;
        checkbox.addEventListener('change', () => {
            document.body.classList.toggle('theme-light');
            document.body.classList.toggle('theme-dark');
        })
    </script>
<?php } ?>