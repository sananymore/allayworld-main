<div class="w-full md:w-1/3 bg-slate-200/10 backdrop-blur-xl py-4 px-6 rounded-3xl flex items-center justify-center h-52">
                        <div class="block w-full">
                            <h1 class="text-slate-200 font-bold text-xl text-center mb-2">Ваш аккаунт</h1>
                            <div class="mx-auto flex items-center justify-between">
                                <div class="text-slate-200 flex justify-center items-center w-10">
                                    <span class="fas fa-user"></span>
                                </div>
                                <span class="font-bold font-mono text-sm mt-0.5 text-slate-200 max-h-5 h-5 max-w-32 w-32 inline-block text-ellipsis overflow-hidden whitespace-nowrap">
                                
                                    <!-- ИМЯ АККАУНТА -->
                                    <?php
                                        if(isset($_SESSION['allay_player_name'])) echo $_SESSION['allay_player_name'];
                                        else echo "Войдите";
                                    ?>

                                </span>
                                <button onclick="window.location.href='./profile/settings'" title="Редактировать" class="w-10 h-10 flex justify-center items-center rounded-full text-slate-200 hover:bg-black/5 smooth">
                                    <div class="fas fa-pen-to-square"></div>
                                </button>
                            </div>
                            <div class="mx-auto flex items-center justify-between mt-0.5">
                                <div class="text-slate-200 flex justify-center items-center w-10">
                                    <span class="fas fa-coins"></span>
                                </div>
                                <span class="font-bold font-mono text-sm mt-0.5 text-slate-200 max-h-5 h-5 max-w-32 w-32 inline-block text-ellipsis overflow-hidden whitespace-nowrap">

                                    <!-- БАЛАНС АККАУНТА -->
                                    <?php
                                        if(isset($_SESSION['allay_player_balance'])) echo $_SESSION['allay_player_balance'];
                                        else echo "Войдите";
                                    ?>


                                </span>
                                <button onclick="window.location.href='./replenishment'" title="Пополнить баланс" class="w-10 h-10 flex justify-center items-center rounded-full text-slate-200 hover:bg-black/5 smooth">
                                    <div class="fas fa-plus"></div>
                                </button>
                            </div>
                            <div class="flex w-full mt-0.5">
                                <button onclick="window.location.href='./shop'" title="Магазин" class="font-bold w-1/3 h-10 flex justify-center items-center rounded-full text-slate-200 hover:bg-black/5 smooth">
                                    Магазин
                                </button>
                                <button onclick="window.location.href='./profiles'" title="Профили игроков" class="font-bold w-2/3 h-10 flex justify-center items-center rounded-full text-slate-200 hover:bg-black/5 smooth">
                                    Профили игроков
                                </button>
                            </div>
                        </div>
                    </div>