<div>
    <div class="top_con">
        <h1 class="title">お問い合わせ</h1>
    </div>
    <form wire:submit.prevent="confirm">
    @csrf
        <div class="form-item">
            <p class="form-item-label">お名前<span class ="red"> ※</span></p>
            <div class="form-item-con">
                <input type="text" class=input_text1 wire:model.lazy="posts.last_name" value="{{ @$posts['last_name'] }}">
                <input type="text" class=input_text1 wire:model.lazy="posts.first_name" value="{{ @$posts['first_name'] }}">
            </div>
        </div>
        @error('posts.last_name') <a class="error">{{ $message }}</a> @enderror
        @error('posts.first_name') <a class="error">{{ $message }}</a> @enderror
        <div class="form-item">
            <div class="example">
                <p class="example_label"></p>
                <p class="example1">例) 山田</p>
                <p class="example2">例) 太郎</p>
            </div>
        </div>
        <div class="form-item">
            <p class="form-item-label">性別<span class ="red"> ※</span></p>
            <div class="form-item-con">
                <label>
                <input class="input_radio1" type="radio" name="gender" value="1" {{ old('gender','1') == '1' ? 'checked' : '' }} ><span class="radio" wire:model="posts.gender">男性</span>
                </label> 
                <label>
                <input class="input_radio2" type="radio" name="gender" value="2" {{ old('geder') == '2' ? 'checked' : '' }} wire:model="posts.gender" ><span class="radio">女性</span>
                </label> 
            </div>
        </div>
        <div class="form-item">
            <div class="example"><br></div>
        </div>
        <div class="form-item">
            <p class="form-item-label">メールアドレス<span class ="red"> ※</span></p>
            <div class="form-item-con">
                <input type="email" class="input_text1" wire:model.lazy="posts.email">
            </div>
        </div>
        @error('posts.email') <a class="error">{{ $message }}</a> @enderror
        <div class="form-item">
            <div class="example">
                <p class="example_label"></p>
                <p class="example1">例) test@example.com</p>
            </div>
        </div>
        <div class="h-adr">
            <span class="p-country-name" style="display:none;">Japan</span>
            <div class="form-item">
                <p class="form-item-label">郵便番号<span class ="red"> ※</span></p>
                <div class="form-item-con">
                        <a class="postcode_mark">〒</a>
                        <input type="text" class="input_text1 p-postal-code" size="8" maxlength="8" wire:model.lazy="posts.postcode">
                </div>
            </div>
            @error('posts.postcode') <a class="error">{{ $message }}</a> @enderror
            <div class="form-item">
                <div class="example">
                    <p class="example_label"></p>
                    <p class="example3">例) 123-4567</p>
                </div>
            </div>
            <div class="form-item">
                <p class="form-item-label">住所<span class ="red"> ※</span></p>
                <div class="form-item-con">
                    <input type="text" class="input_text1 p-region p-street-address p-extended-address" wire:model.lazy="posts.address">
                </div>
            </div>
            @error('posts.address') <a class="error">{{ $message }}</a> @enderror   
            <div class="form-item">
                <div class="example">
                    <p class="example_label"></p>
                    <p class="example1">例)東京都渋谷区千駄ヶ谷1-2-3</p>
                </div>
            </div>         
        </div>
        <div class="form-item">
            <p class="form-item-label">建物名</p>
            <div class="form-item-con">
                <input type="text" class="input_text1" wire:model.lazy="posts.building_name">
            </div>
        </div>
        <div class="form-item">
            <div class="example">
                <p class="example_label"></p>
                <p class="example1">例) 千駄ヶ谷マンション101</p>
            </div>
        </div>
        <div class="form-item-end">
            <p class="form-item-label">ご意見<span class ="red"> ※</span></p>
            <div class="form-item-con">
                <textarea name="opinion"  id="opinion" class="input_text2"  rows="6" wrap="soft" maxlength="120" wire:model.lazy="posts.opinion"></textarea>
            </div>
        </div>
        @error('posts.opinion') <a class="error">{{ $message }}</a> @enderror
        <div class="form-submit-btn">
            <button type="submit" class="btn-submit">確認</button>
        </div>
    </form>
</div>
