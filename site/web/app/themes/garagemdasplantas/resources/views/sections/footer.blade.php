<footer id="footer" class="content-info bg-primary text-white py-6">
    <div
        class="container max-w-none text-white prose:a:text-white">
        @php(dynamic_sidebar('sidebar-footer'))
        <div class="text-sm mt-4 flex flex-col items-center copyright border-white border-t border-solid pt-8 gap-2 text-black">
            <span class="z-10 font-bold text-white">© 2025 - {{ date('Y') }} 
                <a class="hover:underline text-white" href="{{ home_url('/') }}">Garagem das Plantas</a>
                <span id="trademark" class="sup align-text-bottom">&reg;</span>
            </span>
        </div>
    </div>

</footer>
