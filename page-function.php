<?php 
/*
Template Name: function
*/
get_header(); ?> 
<?php $uri = get_theme_file_uri(); ?>
    <main>
        <section class="p-functionMv c-mv l-wrapper">
            <div class="c-mv__inner l-inner">
                <div class="c-mv__contents">
                    <h1 class="c-mv__head">機能</h1>
                    <p class="c-mv__txt">
                        WELSAは従業員と組織の生産性を向上させる<br class="br-pc-only">豊富な機能で健康経営をサポートします
                    </p>
                </div>
            </div>
        </section>
        <section class="p-functionNav l-wrapper">
            <div class="p-functionNav__inner l-inner">
                <ul class="p-functionNav__list">
                    <li>
                        <a href="#health-care" class="c-link"><span>健康診断管理</span></a>
                    </li>
                    <li>
                        <a href="#stress" class="c-link"><span>ストレスチェック管理</span></a>
                    </li>
                    <li>
                        <a href="#analysis" class="c-link"><span>分析・予測</span></a>
                    </li>
                    <li>
                        <a href="#measures" class="c-link"><span>対策</span></a>
                    </li>
                    <li>
                        <a href="#others" class="c-link"><span>その他</span></a>
                    </li>
                </ul>
            </div>
        </section>
        <section class="p-functionContents l-wrapper" id="health-care">
            <div class="p-functionContents__inner l-inner">
                <h2 class="p-functionContents__head">健康診断管理</h2>
                <figure class="p-functionContent__img">
                    <img src="<?php echo $uri; ?>/img/function/function-img01.jpg" alt="">
                </figure>
                <p class="p-functionContent__txt">
                    健診受診対象者の管理および受診案内のメール送信ができます。メール送信は、組織別や年齢別、個人別といった様々な条件に基づいて送信できます。<br>
                    <br>
                    未受診者に対しては受診勧奨案内を通知できます。<br>
                    また、再検査対象者の受診状況の把握や再検査受診案内も通知できます。<br>
                    <br>
                    さらに健康診断の結果に基づく有所見者をワンクリックで抽出できます。抽出条件も企業様にて自由に設定頂くことができます。
                </p>
                <h3 class="p-functionContent__head">主な機能</h3>
                <ul class="p-functionContent__list">
                    <li>
                        <h4 class="p-functionContent__list--head">電子カルテ生成</h4>
                        <p class="p-functionContent__list--txt">
                            従業員一人一人の電子カルテを生成します。電子カルテでは健康診断やストレスチェックといった健康情報を時系列で一元管理します。また、生成した電子カルテは従業員も閲覧可能です。
                        </p>
                    </li>
                    <li>
                        <div class="p-functionContent__option--wrapper"><h4 class="p-functionContent__list--head">ペーパーレス化代行</h4><span class="p-functionContent__option--tag">オプション</span></div>
                        <p class="p-functionContent__list--txt">
                            健診結果の紙からデータ化への工程を全面サポートします。紙の健診結果を郵送等でお送り頂くだけで、当社にてデータ化およびWELSAサービス画面への反映まで行います。
                        </p>
                    </li>
                    <li>
                        <h4 class="p-functionContent__list--head">検査結果の自動判定</h4>
                        <p class="p-functionContent__list--txt">
                            健康診断の検査結果を基に、日本人間ドック学会の基準に基づく判定を自動で行います。<br>
                            標準化した判定基準により、健診機関によって異なるバラつきをなくすことができます。
                        </p>
                    </li>
                    <li>
                        <h4 class="p-functionContent__list--head">再検査対象者管理</h4>
                        <p class="p-functionContent__list--txt">
                            再検査が必要な対象者に対しラベル付けし、受診状況を把握することができます。再検査の未受診者の抽出も可能で、受診勧奨案内を通知することができます。
                        </p>
                    </li>
                    <li>
                        <h4 class="p-functionContent__list--head">就業判定管理</h4>
                        <p class="p-functionContent__list--txt">
                            産業保健スタッフによる就業判定結果を記録、保存し管理することができます。<br>
                            就業制限等が必要な方を抽出し、個別に業務支援やフォローを行うことができます。
                        </p>
                    </li>
                    <li>
                        <h4 class="p-functionContent__list--head">従業員との面談記録管理</h4>
                        <p class="p-functionContent__list--txt">
                            産業保健スタッフおよび人事部門の方が従業員と面談した記録を保存しておくことができます。<br>
                            過去に登録した面談記録を比較しながら閲覧することもできます。
                        </p>
                    </li>
                    <li>
                        <h4 class="p-functionContent__list--head">産業医の意見書等のファイル保存</h4>
                        <p class="p-functionContent__list--txt">
                            産業医の意見聴取時のコメントや意見書等のファイルを電子カルテ上に保存しておくことができます。<br>
                            過去に登録した産業医コメントや意見書等を比較しながら閲覧することもできます。
                        </p>
                    </li>
                    <li>
                        <h4 class="p-functionContent__list--head">労働基準監督署への報告書作成支援</h4>
                        <p class="p-functionContent__list--txt">
                            労働基準監督署への提出資料に必要なデータを自動集計し、提出いたします。
                        </p>
                    </li>
                    <li>
                        <div class="p-functionContent__option--wrapper"><h4 class="p-functionContent__list--head">産業医派遣</h4><span class="p-functionContent__option--tag">オプション</span></div>
                        <p class="p-functionContent__list--txt">
                            産業医・保健師の派遣や業務のアウトソースも可能です。<br>
                            産業保健業務の実施体制を強化したい場合にご活用頂けます。
                        </p>
                    </li>
                    <li>
                        <div class="p-functionContent__option--wrapper"><h4 class="p-functionContent__list--head">健診予約代行</h4><span class="p-functionContent__option--tag">オプション</span></div>
                        <p class="p-functionContent__list--txt">
                            健康診断受診に関する「健診機関との契約締結」「従業員および健診機関との健診予約調整」「健診機関への受診料の支払い」といった手間のかかる業務を代行することも可能です。
                        </p>
                    </li>
                </ul>
            </div>
        </section>
        <section class="p-functionContents l-wrapper" id="stress">
            <div class="p-functionContents__inner l-inner">
                <h2 class="p-functionContents__head">ストレスチェック管理</h2>
                <figure class="p-functionContent__img">
                    <img src="<?php echo $uri; ?>/img/function/function-img02.jpg" alt="">
                </figure>
                <p class="p-functionContent__txt">
                    職業性ストレス簡易調査票57問と新職業性ストレス簡易調査票80問を用意。<br>
                    ストレスチェック受検対象者の管理および受検案内のメール送信ができます。メール送信は、組織別や雇用形態別、個人別といった様々な条件に基づいて送信できます。<br>
                    未受検者に対しては受検勧奨案内を通知できます。<br>
                    また、未受検率の高い事業所や組織に絞って、受検勧奨案内を通知することもできます。<br>
                    <br>
                    高ストレス者の中から面接指導の対象者を抽出し、面接指導の申出勧奨や面接日程管理を行うことができます。
                </p>
                <h3 class="p-functionContent__head">主な機能</h3>
                <ul class="p-functionContent__list">
                    <li>
                        <h4 class="p-functionContent__list--head">Web受検</h4>
                        <p class="p-functionContent__list--txt">
                            従業員は、パソコンまたはスマートフォンからWeb受検できます。<br>
                            受検後は、直ちに結果を閲覧でき、受検結果は従業員の電子カルテに保存されます。
                        </p>
                    </li>
                    <li>
                        <h4 class="p-functionContent__list--head">受検結果の自動判定</h4>
                        <p class="p-functionContent__list--txt">
                            受検結果を基に、自動的に高ストレス判定を行います。
                        </p>
                    </li>
                    <li>
                        <h4 class="p-functionContent__list--head">就業判定管理</h4>
                        <p class="p-functionContent__list--txt">
                            産業保健スタッフによる就業判定結果を記録、保存し管理することができます。<br>
                            就業制限等が必要な方を抽出し、個別に業務支援やフォローを行うことができます。
                        </p>
                    </li>
                    <li>
                        <h4 class="p-functionContent__list--head">産業医の意見書等のファイル保存</h4>
                        <p class="p-functionContent__list--txt">
                            産業医の意見聴取時のコメントや意見書等のファイルを電子カルテ上に保存しておくことができます。<br>
                            過去に登録した産業医コメントや意見書等を比較しながら閲覧することもできます。
                        </p>
                    </li>
                    <li>
                        <h4 class="p-functionContent__list--head">従業員との面談記録管理</h4>
                        <p class="p-functionContent__list--txt">
                            産業保健スタッフおよび人事部門の方が従業員と面談した記録を保存しておくことができます。<br>
                            過去に登録した面談記録を比較しながら閲覧することもできます。
                        </p>
                    </li>
                    <li>
                        <h4 class="p-functionContent__list--head">労働基準監督署への報告書作成支援</h4>
                        <p class="p-functionContent__list--txt">
                            労働基準監督署への提出資料に必要なデータを自動集計し、提出いたします。
                        </p>
                    </li>
                    <li>
                        <h4 class="p-functionContent__list--head">集団分析</h4>
                        <p class="p-functionContent__list--txt">
                            集団分析結果を組織別、従業員属性別にレポートを報告いたします。
                        </p>
                    </li>
                </ul>
            </div>
        </section>
        <section class="p-functionContents l-wrapper" id="analysis">
            <div class="p-functionContents__inner l-inner">
                <h2 class="p-functionContents__head">分析・予測</h2>
                <ul class="p-functionContent__list">
                    <li class="having-img">
                        <figure class="p-functionContent__list--img">
                            <img src="<?php echo $uri; ?>/img/function/function-img03.jpg" alt="">
                        </figure>
                        <div class="p-functionContent__list--txts">
                            <h4 class="p-functionContent__list--head">健康リスク評価</h4>
                            <p class="p-functionContent__list--txt">
                                生産性につながりやすい「メンタル」と「フィジカル」の両面 から 「健康リスク評価」 を実施。全社状況の把握や事業所別、従業員属性といった観点や経年変化の比較により、健康課題の把握や要因分析、早期発見、早期対策が容易になります。
                            </p>
                            <p class="p-functionContent__list--txtCaution">
                                ※1：本分析手法は経済産業省・健康寿命延伸産業創出推進事業「健康経営評価指標の策定・活用事業」（東京大学政策ビジョン研究センター　健康経営研究ユニット［現：未来ビジョン研究センター］）の研究発表「健康経営の枠組みによる健康課題の見える化」によるものです。
                            </p>
                        </div>
                    </li>
                    <li class="having-img" id="analysis-risk">
                        <figure class="p-functionContent__list--img">
                            <img src="<?php echo $uri; ?>/img/function/function-img04.jpg" alt="">
                        </figure>
                        <div class="p-functionContent__list--txts">
                            <h4 class="p-functionContent__list--head">重大疾病の発症リスク予測</h4>
                            <p class="p-functionContent__list--txt">
                                健康診断、生活習慣の結果をもとに、各種がん、糖尿病、脳梗塞などの重大疾病の10年以内の発症リスクを計算。全社の傾向把握、リスクの高い従業員の把握、従業員への意識向上が期待できます。
                            </p>
                            <p class="p-functionContent__list--txtCaution">
                                ※2：本発症リスク予測は、40代以上の従業員が対象です。<br>
                                ※3：本発症リスク予測は、国立がん研究センター「多目的コホート研究に基づくがん等生活習慣病リスクを計算するアルゴリズム」、及び、国立国際医療研究センター「糖尿病の発症リスクを計算するアルゴリズム」によるものです。
                            </p>
                        </div>
                    </li>
                    <li>
                        <h4 class="p-functionContent__list--head">組織分析レポート</h4>
                        <p class="p-functionContent__list--txt">
                            「健康リスク分析」「プレゼンティーズム分析」等を含む組織分析レポートをご確認いただけます。
                        </p>
                    </li>
                </ul>
            </div>
        </section>
        <section class="p-functionContents l-wrapper" id="measures">
            <div class="p-functionContents__inner l-inner">
                <h2 class="p-functionContents__head">対策</h2>
                <ul class="p-functionContent__list">
                    <li id="BfB">
                        <div class="p-functionContent__option--wrapper"><h4 class="p-functionContent__list--head">Beatfit for Biz</h4><span class="p-functionContent__option--tag">オプション</span></div>
                        <p class="p-functionContent__list--txt">
                            産業保健スタッフおよび人事部門の方が従業員と面談した記録を保存しておくことができます。<br>
                            過去に登録した面談記録を比較しながら閲覧することもできます。
                        </p>
                        <p class="p-functionContent__list--link"><a href="https://welsa.biz/sollp001/" target="_blank" class="c-link">詳しくはこちら</a></p>
                    </li>
                    <li id="game">
                        <div class="p-functionContent__option--wrapper"><h4 class="p-functionContent__list--head">すごろく大冒犬</h4><span class="p-functionContent__option--tag">オプション</span></div>
                        <p class="p-functionContent__list--txt">
                            毎日３つの健康ミッションをクリアして「すごろくゲーム」のゴールを目指す健康支援アプリ。1500以上のミッションで楽しく健康増進を図ることができます。
                        </p>
                    </li>
                    <li id="seminar">
                        <div class="p-functionContent__option--wrapper"><h4 class="p-functionContent__list--head">健康セミナー</h4><span class="p-functionContent__option--tag">オプション</span></div>
                        <p class="p-functionContent__list--txt">
                            食事・運動・睡眠・メンタル・慢性痛・禁煙の６つのカテゴリで計 30 種のセミナーを提供しています。組織や従業員ひとりひとりの健康課題に適したプログラムが選択可能です。
                        </p>
                        <p class="p-functionContent__list--link"><a href="https://welsa.biz/program/" target="_blank" class="c-link">詳しくはこちら</a></p>
                    </li>
                    <li>
                        <div class="p-functionContent__option--wrapper"><h4 class="p-functionContent__list--head --small">テイラードストレス<br>マネジメントサービス</h4><span class="p-functionContent__option--tag">オプション</span></div>
                        <p class="p-functionContent__list--txt">
                            東京大学 川上憲人教授の監修のもと開発したストレスチェック後に閲覧できるセルフケア動画コンテンツ。「高ストレス判定されても面接指導の申し出が従業員から無く、対策ができない」といった課題に対応可能なソリューションを提供致します。
                        </p>
                    </li>
                </ul>
            </div>
        </section>
        <section class="p-functionContents l-wrapper" id="others">
            <div class="p-functionContents__inner l-inner">
                <h2 class="p-functionContents__head">その他</h2>
                <ul class="p-functionContent__list">
                    <li>
                        <h4 class="p-functionContent__list--head">安心のセキュリティ</h4>
                        <p class="p-functionContent__list--txt">
                            厚生労働省、経済産業省、総務省の3 省のクラウドサービス事業者・情報処理事業者に対するガイドラインに準拠。安全なセキュリティ化で社員の情報を守ります。
                        </p>
                    </li>
                    <li>
                        <h4 class="p-functionContent__list--head">スマートフォン対応</h4>
                        <p class="p-functionContent__list--txt">
                            健康診断、ストレスチェック、健康リスクなどの結果を、パソコン・スマートフォンでいつでもどこでも確認できます。
                        </p>
                    </li>
                </ul>
            </div>
        </section>
        <?php get_template_part('cta'); ?>
    </main>
<?php get_footer(); ?>