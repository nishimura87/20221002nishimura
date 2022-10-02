<div>
    <div class="top_con">
        <h1 class="title">内容確認</h1>
    </div>
    <div class="form-item">
        <p class="form-item-label">お名前</p>
        <div class="form-item-con">
            <div class="confirm_last_name">{{ @$posts['last_name'] }}</div>
            <div class="confirm_first_name">{{ @$posts['first_name'] }}</div>
        </div>
    </div>
    <div class="form-item">
        <p class="form-item-label">性別</p>
        <div class="form-item-con">
            @if(@$posts['gender']=='1')
            <div class="gender">男性</div>
            @else
            <div class="gender">女性</div>
            @endif
        </div>
    </div>
    <div class="form-item">
        <p class="form-item-label">メールアドレス</p>
        <div class="form-item-con">
            <div class="confirm_email">{{ @$posts['email'] }}</div>
        </div>
    </div>
    <div class="form-item">
        <p class="form-item-label">郵便番号</p>
        <div class="form-item-con">
            <div class="confirm_postcode">{{ @$posts['postcode'] }}</div>
        </div>
    </div>
    <div class="form-item">
        <p class="form-item-label">住所</p>
        <div class="form-item-con">
            <div class="confirm_address">{{ @$posts['address'] }}</div>
        </div>
    </div>
    <div class="form-item">
        <p class="form-item-label">建物名</p>
        <div class="form-item-con">
            <div class="confirm_postcode">{{ @$posts['building_name'] }}</div>
        </div>
    </div>
    <div class="form-item">
        <p class="form-item-label">ご意見</p>
        <div class="form-item-con">
            <div class="confirm_postcode">{{ @$posts['opinion'] }}</div>
        </div>
    </div>
    <div class="form-submit-btn">
        <button wire:click="save" class="btn-submit">送信</button>
    </div>
    <div class="form-back-btn">
        <button wire:click="back" class="btn-back">修正</button>
    </div>   
</div>