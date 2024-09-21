<template>
    <Menu />
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>


        </ul>


    </nav>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            <div class="content-wrapper">

                <slot />

            </div>


            <aside class="control-sidebar control-sidebar-dark">

                <div class="p-3">
                    <h5>Title</h5>
                    <p>Sidebar content</p>
                </div>
            </aside>
            <Footer />

        </div>
    </body>

</template>

<script setup>
import Menu from './Partials/Menu.vue'
import Footer from './Partials/Footer.vue';


</script>
