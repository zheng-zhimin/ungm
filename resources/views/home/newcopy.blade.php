@extends('home.layout.newindex')

@section('title')
    隐私条款
@endsection


@section('content')


<link rel="stylesheet" type="text/css" href="/ungmhome/css/style.css">

    <div class="main">
       
        <!--2.图片区-->
        <div class="img-responsive pic">
            <img src="/ungmhome/images/使用协议版权隐私.jpg" alt="">
        </div>
        <!--3.版权隐私区-->
        <div class="privacy">
            <div class="container">
                <div class="text-center">
                    <img src="/ungmhome/images/privacy1.png" alt="">
                </div>
                <div class="privacyBox">
                    <div class="privacyTxt">
                        <div class="privacyTop">
                            <h4>睿鹿网提醒您</h4>
                        </div>
                        <div class="privacyBot">
                            <div class="privacyOne">
                                <p>本网站由九鼎智成（北京）信息技术股份有限公司所有、运营及维护。任何人士进入本网站、阅读任何内容、从本网站下载
                                    任何材料或使用本网站提供的资料，即表示同意遵守下列条款。这些条款构成睿鹿网/九鼎智成（北京）信息
                                    技术股份有限公司与您之间的协议。若不同意遵守这些条款，切勿使用本网站。任何时间，任何情况下，睿鹿网均有权拒绝任何用户进入、使用本网站，有权随时删除网页信息。睿鹿网保留随时更正、修改、更新
                                    本声明的权利，而这些修改也同样约束您。</p>
                            </div>
                            <div class="privacyOne">
                                <p>本声明内容包括声明正文及所有睿鹿网已经发布或将发布的各类规则和协议。所有内容均为本声明不可分割
                                    的一部分，与声明正文具有同等法律效力。</p>
                            </div>
                        </div>
                        <div class="privacyTop privacyLine">
                            <h4>本网站的信息</h4>
                        </div>
                        <div class="privacyBot">
                            <div class="privacyOne">
                                <p>本网站所提供的信息和内容不得用于任何不合法的目的，或以任何不符合国家法律法规及网站公示条款规定的方式使用本
                                    网站所提供的信息。本网站发布的信息，仅供参考之用、不用作任何商业用途。</p>
                            </div>
                            <div class="privacyOne">
                                <p>任何单位或个人认为睿鹿网的相关内容（包括但不限于睿鹿网会员发布的商品信息）侵犯或可能
                                    涉嫌侵犯其合法权益，应该及时向睿鹿网提出书面权利通知， 并提供身份证明（如居民身份证或法人营业
                                    执照等）、权属证明（所有权或知识产权证明等）、具体网址链接（URL）及详细侵权情况证明。睿鹿网在
                                    收到上述法律文件并确认无误后，将会依法尽快移除相关涉嫌侵权的内容。</p>
                            </div>
                            <div class="privacyOne">
                                <p>睿鹿网转载作品（包括论坛内容）出于传递更多信息之目的，并不意味睿鹿网（包括睿鹿网关联企业）赞同其观点或证实其内容的真实性。睿鹿网尊重合法的知识产权，反对侵犯知识产权
                                    的行为。若本网有部分文字、摄影作品、产品信息或企业库信息等侵害了您的权益，在此深表歉意，请您立即将侵权链接
                                    及侵权证明按上述条款的要求发送至我们的投诉邮箱： tousu@ungm.org.cn， 我们会尽快与您联系并解决。</p>
                            </div>
                            <div class="privacyOne">
                                <p>我们在此声明，tousu@ungm.org.cn为睿鹿网处理侵权投诉的专用邮箱，我们会在收到侵权投诉邮件后3个
                                    工作日内与您取得联系，如果您选择其他途径（包括但不限于通过400电话、客服邮箱或向第三方投诉等方式），我们不
                                    能保证可以及时处理，请您谅解！</p>
                            </div>
                            <div class="privacyBtn text-center">
                                <button class="privacyHidden">阅读更多</button>
                            </div>
                            <div class="privacyShow">
                                <div class="privacyTop privacyLine">
                                    <h4>知识产权声明</h4>
                                </div>
                                <div class="privacyBot">
                                    <div class="privacyOne">
                                        <p>九鼎智成（北京）信息技术股份有限公司拥有睿鹿网站内所有信息内容（除睿鹿网会员
                                            发布的商品信息外，包括但不限于文字、图片、软件、音频、视频）的知识产权</p>
                                    </div>
                                    <div class="privacyOne">
                                        <p>任何被授权的浏览、复制、打印和传播属于睿鹿网站内信息的，其内容都不得用于商业目的。所有信
                                            息内容及其任何部分的使用都必须遵守此知识产权声明并不得侵犯睿鹿网的任何知识产权。</p>
                                    </div>
                                    <div class="privacyOne">
                                        <p>睿鹿网所有的产品、技术、计算机程序及其他网页内容均属于睿鹿网知识产权。“睿鹿网”以及睿鹿网其他产品服务名称及相关图形、标识等为睿鹿网/ 九鼎
                                            智成（北京）信息技术股份有限公司的注册商标。未经睿鹿网/九鼎智成（北京）信息技术股份有限
                                            公司的许可，任何人不得擅自使用（包括但不限于：以非法的方式复制、传播、展示、镜像、上载或下载）。任何
                                            未经授权使用本网站的行为都将违反《中华人民共和国著作权法》和其他法律法规以及有关国际公约的规定。
                                            对此，睿鹿网/九鼎智成（北京）信息技术股份有限公司将依法追究其法律责任。</p>
                                    </div>
                                </div>
                                <div class="privacyTop privacyLine">
                                    <h4>隐私权保护</h4>
                                </div>
                                <div class="privacyBot">
                                    <div class="privacyOne">
                                        <p>睿鹿网尊重广大用户的隐私，未经用户的同意，我们不搜集用户的资料。对于因服务的需要而掌握的
                                            用户的电子邮件、信息和地址等我们承诺非经用户允许，不向任何第三方提供。</p>
                                    </div>
                                    <div class="privacyOne">
                                        <p>睿鹿网不会公布或传播用户在本网站注册的任何资料，但下列情况除外：</p>
                                        <p>1. 事先获得用户的明确授权；</p>
                                        <p>2. 依据法院、仲裁机构的裁判或裁决，以及其他司法程序的要求；</p>
                                        <p>3. 按照相关政府主管部门的要求；</p>
                                        <p>4. 用户违反睿鹿网服务条款的规定或有其他损害睿鹿网/九鼎智成（北京）信息技术股份有限公司利益的行为；</p>
                                    </div>
                                    <div class="privacyOne">
                                        <p>访问者可以在本网站张贴评论、意见、图片和其他内容，以及提出建议、想法、意见、问题或其他信息，前提是其
                                            内容不是非法、淫秽、威胁、诽谤、侵犯隐私、侵犯知识产权或以其他形式对第三方构成伤害、侵犯或引起公众
                                            反感，也不包含软件病毒、政治宣传、商业招揽、连锁信、大宗邮件或任何形式的“垃圾邮件”的信息。您不得使用
                                            虚假的电子邮件地址、手机号码、冒充任何他人或实体，或以其它方式对相关内容的来源进行误导。本网站保留
                                            清除或编辑这些内容的权利（但非义务），但不对所张贴的内容进行经常性的审查。如果您在本网站张贴内容或
                                            提交材料，除非您另行说明，您同意授予我们非独有的、免费的、永久的、不可撤销的和完全的再许可权的下述
                                            许可：在全世界范围内任何媒体上使用、转载、修改、改编、出版、翻译、创作衍生作品、分发和展示这些内容。</p>
                                    </div>
                                    <div class="privacyOne">
                                        <p>本网站表述的任何意见均属于作者个人意见，并不代表睿鹿网的意见。</p>
                                    </div>
                                </div>
                                <div class="privacyTop privacyLine">
                                    <h4>免责声明</h4>
                                </div>
                                <div class="privacyBot">
                                    <div class="privacyOne">
                                        <p>睿鹿网在此特别声明对如下事宜不承担任何法律责任：</p>
                                        <p>（一）本公司不保证本网站所载述的任何内容以及使用这些内容可能得出的任何结果的准确性、及时性、完整性、
                                            可靠性；不保证网站服务器及网络的稳定性，不保证本网站在任何时候均可供浏览、阅读、复制、使用。</p>
                                        <p>（二）对您使用本网站、与本网站相关的任何内容、服务或其它链接至本网站的站点、内容均不作直接、间接、法定、约定的保证。</p>
                                        <p>（三）无论在任何原因下（包括但不限于疏忽原因），对您或任何人通过使用本网站上的信息或由本网站链接的信
                                            息，或其他与本网站链接的网站信息所导致的损失或损害（包括直接、间接、特别或后果性的损失或损害，例如
                                            收入或利润之损失，电脑系统之损坏或数据丢失等后果），责任均由使用者自行承担（包括但不限于疏忽责任）。</p>
                                        <p>（四）本网站仅作为用户寻找交易对象，就货物和服务的交易进行协商，以及获取各类与贸易相关的服务信息的平
                                            台。本网站不能控制也不能担保交易所涉及的物品的质量、性能、安全性或合法性，商贸信息的真实性或准确性，
                                            也不保证交易双方履行其在贸易协议项下的各项义务的能力。本网站不能也不会控制交易双方能否履行合同义务。
                                            在睿鹿网平台上获取信息后，您与该贸易对象的交易行为，睿鹿网不参与其中，不承担
                                            瑕疵担保和所有权担保义务，所有纠纷均由交易双方自行解决并独立承担法律责任。</p>
                                        <p>（五）使用者对本网站的使用即表明同意承担浏览本网站的全部风险，由于睿鹿网、睿鹿网运营商或睿鹿网关联公司未参与建设、制作或发展本网站或提供内容，对使用者在本网站存取资料
                                            所导致的任何直接、相关的、后果性的、间接的或金钱上的损失不承担任何责任。</p>
                                        <p>睿鹿网在此特别声明对如下事宜不承担任何法律责任：</p>
                                        <p>（六）任何情况下，睿鹿网均有权在未经通知的情况下随时关闭、删除睿鹿网上的任何网页
                                            信息，对此给会员或其他第三方主体造成损失的，睿鹿网免责。</p>
                                        <p>睿鹿网在此特别声明对如下事宜不承担任何法律责任：</p>
                                        <p>（七）其他睿鹿网网站公示的条款中约定的内容。</p>
                                    </div>
                                    <div class="privacyOne">
                                        <p>会员在发布其企业介绍或产品信息时，不得含有虚假或者引人误解的内容，不得欺骗、误导消费者，应当由会员
                                            独自对其发布内容的真实性负责，睿鹿网不对此承担保证责任及侵权责任。</p>
                                    </div>
                                    <div class="privacyOne">
                                        <p>会员从事信息发布等活动，应当遵守法律、法规，诚实信用，公平竞争。信息发布以虚假或者引人误解的内容欺骗、
                                            误导消费者的，构成虚假信息发布。发布的信息有下列情形之一的，为虚假信息发布：</p>
                                        <p>(一)商品或者服务不存在的；</p>    
                                        <p>会员在发布其企业介绍或产品信息时，不得含有虚假或者引人误解的内容，不得欺骗、误导消费者，应当由会员独自
                                            对其发布内容的真实性负责，睿鹿网不对此承担保证责任及侵权责任。</p>    
                                        <p>(二)商品的性能、功能、产地、用途、质量、规格、成分、价格、生产者、有效期限、销售状况、曾获荣誉等信息，
                                            或者服务的内容、提供者、形式、质量、价格、销售状况、曾获荣誉等信息，以及与商品或者服务有关的允诺等
                                            信息与实际情况不符，对购买行为有实质性影响的；</p>    
                                        <p>(三)使用虚构、伪造或者无法验证的科研成果、统计资料、调查结果、文摘、引用语等信息作证明材料的；</p>    
                                        <p>(四)虚构使用商品或者接受服</p>    
                                        <p>(五)以虚假或者引人误解的内容欺骗、误导消费者的其他情形。</p>    
                                    </div>
                                    <div class="privacyOne">
                                        <p>信息发布中对商品的性能、功能、产地、用途、质量、成分、价格、生产者、有效期限、允诺等或者对服务的内容、
                                            提供者、形式、质量、价格、允诺等有表示的，应当准确、清楚、明白。</p>
                                    </div>
                                    <div class="privacyOne">
                                        <p>信息发布不得有下列情形：</p>
                                        <p>(一)使用或者变相使用中华人民共和国的国旗、国歌、国徽，军旗、军歌、军徽；</p>
                                        <p>(二)使用或者变相使用国家机关、国家机关工作人员的名义或者形象；</p>
                                        <p>(三)使用“国家级”、“最高级”、“最佳”等用语；</p>
                                        <p>(四)损害国家的尊严或者利益，泄露国家秘密；</p>
                                        <p>(五)妨碍社会安定，损害社会公共利益；</p>
                                        <p>(六)危害人身、财产安全，泄露个人隐私；</p>
                                        <p>(七)妨碍社会公共秩序或者违背社会良好风尚；</p>
                                        <p>(八)含有淫秽、色情、赌博、迷信、恐怖、暴力的内容；</p>
                                        <p>(九)含有民族、种族、宗教、性别歧视的内容；</p>
                                        <p>(十)妨碍环境、自然资源或者文化遗产保护；</p>
                                        <p>(十一)不得损害未成年人和残疾人的身心健康。</p>
                                        <p>(十二)法律、行政法规规定禁止的其他情形</p>
                                    </div>
                                    <div class="privacyOne">
                                        <p>信息发布使用数据、统计资料、调查结果、文摘、引用语等引证内容的，应当真实、准确，并表明出处。引证内容
                                            有适用范围和有效期限的，应当明确表示。</p>
                                    </div>
                                    <div class="privacyOne">
                                        <p>信息发布中涉及专利产品或者专利方法的，应当标明专利号和专利种类。未取得专利权的，不得在信息发布中谎称取得专利权</p>
                                    </div>
                                    <div class="privacyOne">
                                        <p>禁止使用未授予专利权的专利申请和已经终止、撤销、无效的专利作信息发布。 信息发布不得贬低其他生产经营者的商品或者服务。</p>
                                    </div>
                                    <div class="privacyOne">
                                        <p>医疗、药品、医疗器械类信息发布不得含有下列内容：</p>
                                        <p>(一)表示功效、安全性的断言或者保证；</p>
                                        <p>(二)说明治愈率或者有效率；</p>
                                        <p>(三)与其他药品、医疗器械的功效和安全性或者其他医疗机构比较；</p>
                                        <p>(四)利用广告代言人作推荐、证明；</p>
                                        <p>(五)法律、行政法规规定禁止的其他内容。</p>
                                    </div>
                                    <div class="privacyOne">
                                        <p>药品信息发布的内容不得与国务院药品监督管理部门批准的说明书不一致，并应当显著标明禁忌、不良反应。处方
                                            药信息发布应当显著标明“本广告仅供医学药学专业人士阅读”，非处方药广告应当显著标明“请按药品说明书或者
                                            在药师指导下购买和使用”。</p>
                                    </div>
                                    <div class="privacyOne">
                                        <p>保健食品信息发布不得含有下列内容：</p>
                                        <p>(一)表示功效、安全性的断言或者保证；</p>
                                        <p>(二)涉及疾病预防、治疗功能；</p>
                                        <p>(三)声称或者暗示广告商品为保障健康所必需；</p>
                                        <p>(四)与药品、其他保健食品进行比较；</p>
                                        <p>(五)利用广告代言人作推荐、证明；</p>
                                        <p>(六)法律、行政法规规定禁止的其他内容。</p>
                                        <p>保健食品信息发布应当显著标明“本品不能代替药物”。</p>
                                    </div>
                                    <div class="privacyOne">
                                        <p>农药、兽药、饲料和饲料添加剂信息发布不得含有下列内容：</p>
                                        <p>(一)表示功效、安全性的断言或者保证；</p>
                                        <p>(二)利用科研单位、学术机构、技术推广机构、行业协会或者专业人士、用户的名义或者形象作推荐、证明；</p>
                                        <p>(三)说明有效率；</p>
                                        <p>(四)违反安全使用规程的文字、语言或者画面；</p>
                                        <p>(五)法律、行政法规规定禁止的其他内容。</p>
                                    </div>
                                    <div class="privacyOne">
                                        <p>酒类信息发布不得含有下列内容：</p>
                                        <p>(一)诱导、怂恿饮酒或者宣传无节制饮酒；</p>
                                        <p>(二)出现饮酒的动作；</p>
                                        <p>(三)表现驾驶车、船、飞机等活动；</p>
                                        <p>(四)明示或者暗示饮酒有消除紧张和焦虑、增加体力等功</p>
                                    </div>
                                    <div class="privacyOne">
                                        <p>教育、培训信息发布不得含有下列内容：</p>
                                        <p>(一)对升学、通过考试、获得学位学历或者合格证书，或者对教育、培训的效果作出明示或者暗示的保证性承诺；</p>
                                        <p>(二)明示或者暗示有相关考试机构或者其工作人员、考试命题人员参与教育、培训；</p>
                                        <p>(三)利用科研单位、学术机构、教育机构、行业协会、专业人士、受益者的名义或者形象作推荐、证明。</p>
                                    </div>
                                    <div class="privacyOne">
                                        <p>招商等有投资回报预期的商品或者服务信息发布，应当对可能存在的风险以及风险责任承担有合理提示或者警示，并不得含有下列内容：</p>
                                        <p>(一)对未来效果、收益或者与其相关的情况作出保证性承诺，明示或者暗示保本、无风险或者保收益等，国家另有规定的除外；</p>
                                        <p>(二)利用学术机构、行业协会、专业人士、受益者的名义或者形象作推荐、证明。</p>
                                    </div>
                                    <div class="privacyOne">
                                        <p>房地产信息发布，房源信息应当真实，面积应当表明为建筑面积或者套内建筑面积，并不得含有下列内容：</p>
                                        <p>(一)升值或者投资回报的承诺；</p>
                                        <p>(二)以项目到达某一具体参照物的所需时间表示项目位置；</p>
                                        <p>(三)违反国家有关价格管理的规定；</p>
                                        <p>(四)对规划或者建设中的交通、商业、文化教育设施以及其他市政条件作误导宣传。</p>
                                    </div>
                                    <div class="privacyOne">
                                        <p>第二十七条 农作物种子、林木种子、草种子、种畜禽、水产苗种和种养殖信息发布关于品种名称、生产性能、生长
                                            量或者产量、品质、抗性、特殊使用价值、经济价值、适宜种植或者养殖的范围和条件等方面的表述应当真实、
                                            清楚、明白，并不得含有下列内容：</p>
                                        <p>(一)作科学上无法验证的断言；</p>
                                        <p>(二)表示功效的断言或者保证；</p>
                                        <p>(三)对经济效益进行分析、预测或者作保证性承诺；</p>
                                        <p>(四)利用科研单位、学术机构、技术推广机构、行业协会或者专业人士、用户的名义或者形象作推荐、证明。</p>
                                        <p>违法前述信息发布规则，睿鹿网有权随时对该网页信息、内容及连接采取删除、断开连接等措施。</p>
                                    </div>
                                    <div class="privacyOne">
                                        <p>睿鹿网（www.ungm.org.cn）由九鼎智成（北京）信息技术股份有限公司运营、管理和维护，对于
                                            睿鹿网所涉及的法律纠纷一律由九鼎智成（北京）信息技术股份有限公司解决并由其独立承担法律
                                            责任，相关法律文书的接收亦由九鼎智成（北京）信息技术股份有限公司负责。</p>
                                        <p>任何有关本网站和网站声明的争议，应由有管辖权的人民法院管辖，并且适用中华人民共和国法律。睿鹿网保留随时更改我们的网站和上述各项条款的权利。</p>
                                    </div>
                                    <div class="privacyOne">
                                        <p class="privacySole">本声明的解释权及对本网站使用的解释权归九鼎智成（北京）信息技术股份有限公司所有。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>


<script>
    $(".privacyHidden").click(function(){
        $(".privacyBtn").hide();
        $('.privacyShow').show();
    });
</script>


@endsection
