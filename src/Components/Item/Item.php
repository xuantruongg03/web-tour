<div class="xl:w-96 sm:w-10/12 md:w-1/3 h-96 border-2 drop-shadow my-5 mx-2">
                <div class="relative group">
                    <?php
                    if ($sale != 0) {
                        echo '<div class="absolute top-0 left-3 bg-red-600 h-14 w-12 text-white pl-3 pt-2 clip-path">
                            '.str_pad($sale, 2, '0', STR_PAD_LEFT).'%
                            </div>';
                    }
                    ?>
                    <div class="group">
                        <img class="h-64 w-full"
                            src=<?php echo $image?>
                            alt="place">
                        <div
                            class="absolute inset-0 bg-black opacity-0 group-hover:opacity-50 transition duration-500 ease-in-out">
                        </div>
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <button
                                class="hidden group-hover:block w-24 h-8 rounded-3xl bg-sky-500 p-1 text-sm text-white font-semibold animation-btn">Chi
                                tiết</button>
                        </div>
                    </div>
                    <div class="absolute bottom-3 right-3 flex">
                        <?php
                        foreach ($transport as $item) {
                            if (strcmp($item, "train") == 0) {
                                echo '<div class="bg-white p-1 mr-2">
                                        <img
                                        src="https://bizweb.dktcdn.net/100/315/268/themes/857513/assets/tag_icon_1.png?1671122588148"
                                        alt="transport">
                                     </div>';
                            } 
                            if (strcmp($item, "plane") == 0) {
                                echo '<div class="bg-white p-1 mr-2">
                                        <img
                                        src="https://bizweb.dktcdn.net/100/315/268/themes/857513/assets/tag_icon_3.png?1671122588148"
                                        alt="transport">
                                    </div>';
                            }
                            if (strcmp($item, "ship") == 0) {
                                echo '<div class="bg-white p-1 mr-2">
                                        <img
                                        src="https://bizweb.dktcdn.net/100/315/268/themes/857513/assets/tag_icon_2.png?1671122588148"
                                        alt="transport">
                                    </div>';
                            }
                        }
                        ?>
                    </div>
                </div>
                <a href="#" title="Seim Reap - Phnom Penh (Khách sạn 3 sao), tour tiết kiệm"
                    class="xl:text-base font-semibold p-2 truncate block cursor-pointer hover:text-sky-500">
                    <?php echo $title ?>
                </a>
                <div class="flex border-t-2 p-1 mx-3 drop-shadow-none mt-4">
                    <p class="xl:text-2xl text-sky-500 font-semibold mr-3 mt-2">
                        <?php echo number_format($price - ($price * ($sale / 100)), 0, '', '.') ?> VNĐ
                    </p>
                    <?php
                    if ($sale != 0) {
                        echo '<p class="text-sm leading-8 text-gray-400 line-through mt-3">' . number_format($price, 0, '', '.') . 'đ</p>';
                    }
                    ?>
                </div>
            </div>