<!DOCTYPE html>
<html lang="en">
    <head>
        @include("layout.partials.head")

    </head>

    <body>       

        @include("layout.partials.header")

        @include("layout.partials.nav")
        
        @yield("main")

        @include("layout.partials.footer")

    </body>
</html>