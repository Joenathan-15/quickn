<div class="h-screen w-1/6 border mr-3">
    <div class="mb-5">
        <h1 class="text-3xl text-center p-3 font-semibold border">
            你好 Joenathan 👋
        </h1>
    </div>
    <div>
        <div id="title-bar"
            class="border select-none hover:bg-gray-100 border-b-white hover:cursor-pointer p-3 flex justify-between items-center">
            <h1>
                Catatan Kalkulus 1
            </h1>
            <h1 id="title_clicked" class="text-3xl hover:cursor-pointer">
                +
            </h1>
        </div>
        <div class="border justify-between items-center">
            <form>
                <input id="title_input" type="text" placeholder="Judul catatan" class="w-full p-1">
            </form>
        </div>
        <div class="border px-3 flex justify-between items-center hover:cursor-pointer hover:bg-gray-100">
            <h1>
                P1
            </h1>
            <h1>
                19/10/2024
            </h1>
        </div>
        <div class="border px-3 flex justify-between items-center hover:cursor-pointer hover:bg-gray-100">
            <h1>
                P2
            </h1>
            <h1>
                20/10/2024
            </h1>
        </div>
        <div class="border px-3 flex justify-between items-center hover:cursor-pointer hover:bg-gray-100">
            <h1>
                P3
            </h1>
            <h1>
                25/10/2024
            </h1>
        </div>
    </div>
</div>

@script
    <script>
        let titleBar = document.getElementById("title-bar");
        let titleClicked = document.getElementById("title_clicked");
        let input = document.getElementById("title_input");
        let input_state = true;

        input.classList.add("hidden");
        titleBar.addEventListener("click", function() {
            if(input_state){
                input_state = !input_state
                input.classList.remove("hidden");
                input.classList.add("flex");
                input.focus();
            }else{
                input_state = !input_state
                input.classList.remove("flex");
                input.classList.add("hidden");
            }
        });
    </script>
@endscript
