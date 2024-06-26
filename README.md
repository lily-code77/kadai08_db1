# ①課題番号-プロダクト名
PHP2 - DB連携サービス（作成・参照）

## ②課題内容（どんな作品か）
- 会員の新規登録、ログイン、マイページへのアクセス、ログアウトを実装しました。
- マイページではレシピを画像付きでアップロードできるようにしました（DBにも保存しました）。

## ③DEMO
https://recipelab.sakura.ne.jp/kadai08_db1/public/signup_form.php

## ④工夫した点・こだわった点
- 新規登録とは別で、既会員にはログイン画面からマイページにアクセスできるようにしたこと。
- 会員登録時のセキュリティ対策（セッションハイジャック対策、CSRF対策、XSS対策、ID/PWへの攻撃対策、ディレクトリトラバーサル対策）。
- 画像をDBに保存し、アップロードできるようにしたこと。

## ⑤難しかった点・次回トライしたいこと(又は機能)
- 【難しかったこと】全て。
- 【次回トライしたいこと】JSを適用させて、CSSを頑張りたい。レシピ登録画面とレシピ表示画面を分けたい。ラジオボタンやチェックボックスのインプットにも対応できるようにしたい。レシピを検索できるようにしたい（異なるuserのレシピも見れるようにしたい）。


## ⑥質問・疑問・感想、シェアしたいこと等なんでも
- 【感想】複数のYoutubeや本を見よう見まねで写経し、一つにまとめあげた感が否めず、いまいち理解は追いついていないのが歯痒いです。当初、目指した内容からはだいぶ妥協せざるおえませんでしたが、とはいえ、2つテーブルを使いたいという部分は叶えられてよかったです。