<
   @include("layout.header")

        @include("layout.menu")

        @yield('content')

        @include("layout.footer")
        @yield('jsCode')
    </body>
</html>
