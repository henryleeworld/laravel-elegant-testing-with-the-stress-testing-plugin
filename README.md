# Laravel 10 使用壓力測試插件進行優雅測試

引入 pestphp 的 pest-plugin-stressless 套件來擴增使用壓力測試插件進行優雅測試，這個插件用於檢查應用程式在現實或極端條件下的穩定性和可靠性，具體取決於您設定的場景。

## 使用方式
- 打開 php.ini 檔案，啟用 PHP 擴充模組 Zip，並重啟服務器。
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __test__ 來執行測試。
```sh
$ php artisan test
```

----

## 畫面截圖
![](https://i.imgur.com/9JlH7Uq.png)
> 快速對網址進行壓力測試
