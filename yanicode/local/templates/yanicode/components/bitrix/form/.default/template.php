<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<template id="popup-feedback">
    <form action="" class="js-validated-form">
        <div class="popup-feedback__input-cover">
            <label for="" class="popup-feedback__input-label">Ваше имя и фамилия:</label>
            <input type="text" class="popup-feedback__input js-validated-field" data-validated_name="name" />
        </div>

        <div class="popup-feedback__double-column">
            <div class="popup-feedback__input-cover">
                <label for="" class="popup-feedback__input-label">Телефон</label>
                <input type="tel" class="popup-feedback__input mask-phone-js js-validated-field" data-validated_name="phone" />
            </div>
            <div class="popup-feedback__input-cover">
                <label for="" class="popup-feedback__input-label">Email</label>
                <input type="mail" class="popup-feedback__input js-validated-field" data-validated_name="mail" />
            </div>
        </div>

        <div class="popup-feedback__input-cover">
            <label for="" class="popup-feedback__input-label">Название компании:</label>
            <input type="text" class="popup-feedback__input" />
        </div>

        <div class="popup-feedback__input-cover">
            <label for="" class="popup-feedback__input-label">Опишите Вашу задачу:</label>
            <textarea name="" id="" class="popup-feedback__textarea"></textarea>
        </div>

        <div class="communication-format-text">
Выберете удобный формат связи:
        </div>
        <div class="communication-format">
            <div class="communication-format__item" title="whatsapp">
                <input class="communication-format__checkbox" id="feedback-whatsapp" type="checkbox" />
                <label class="communication-format__label" for="feedback-whatsapp">
                    <svg width="49" height="51" viewBox="0 0 49 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="communication-format__svg" d="M24.5061 0H24.4939C10.9852 0 0 11.2168 0 25.0096C0 30.4805 1.72725 35.5512 4.66419 39.6684L1.61088 48.9594L11.0281 45.8864C14.9021 48.5061 19.5234 50.0192 24.5061 50.0192C38.0148 50.0192 49 38.7993 49 25.0096C49 11.2199 38.0148 0 24.5061 0ZM38.7621 35.3167C38.171 37.0205 35.8251 38.4335 33.9539 38.8462C32.6738 39.1244 31.0017 39.3464 25.3728 36.9642C18.1729 33.9193 13.5363 26.4508 13.1749 25.9662C12.8288 25.4817 10.2655 22.0116 10.2655 18.4227C10.2655 14.8338 12.0509 13.0863 12.7706 12.336C13.3617 11.7201 14.3386 11.4388 15.2758 11.4388C15.5789 11.4388 15.8515 11.4544 16.0965 11.4669C16.8162 11.4982 17.1776 11.5419 17.6523 12.7018C18.2433 14.1554 19.6827 17.7443 19.8542 18.1132C20.0287 18.4821 20.2033 18.9823 19.9583 19.4669C19.7286 19.9671 19.5265 20.189 19.1651 20.6142C18.8037 21.0393 18.4608 21.3645 18.0994 21.8209C17.7686 22.2179 17.395 22.6431 17.8115 23.3777C18.228 24.0968 19.6674 26.4946 21.7866 28.4203C24.5214 30.9056 26.7387 31.6997 27.5319 32.0373C28.1229 32.2874 28.8273 32.228 29.2591 31.7591C29.8073 31.1557 30.4841 30.1553 31.1732 29.1706C31.6632 28.4641 32.2818 28.3765 32.9311 28.6266C33.5926 28.8611 37.093 30.6274 37.8127 30.9932C38.5324 31.3621 39.0071 31.5371 39.1816 31.8466C39.3531 32.1561 39.3531 33.6098 38.7621 35.3167Z" fill="white" />
                    </svg>
                </label>
            </div>
            <div class="communication-format__item" title="skype">
                <input class="communication-format__checkbox" id="feedback-skype" type="checkbox" />
                <label class="communication-format__label" for="feedback-skype">
                    <svg width="49" height="51" viewBox="0 0 49 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="communication-format__svg" d="M47.5419 30.2886C51.0868 14.0299 37.1316 -0.740436 20.7431 2.09496C11.8462 -3.54044 0 2.82775 0 13.6322C0 16.1449 0.6792 18.4974 1.86015 20.525C-1.43387 36.8213 12.6356 51.3792 29.0098 48.3502C40.5847 54.5977 53.3753 42.1382 47.5419 30.2886ZM31.9632 40.0938C27.6636 41.8987 20.5881 41.9092 16.3069 39.6213C10.2023 36.2987 9.11718 28.8189 14.3835 28.8189C18.3527 28.8189 17.0962 33.5425 21.1041 35.4681C22.9439 36.3362 26.8988 36.4257 29.1974 34.8436C31.4675 33.2926 31.2595 30.8528 30.0255 29.687C26.756 26.6059 17.4002 27.83 13.123 22.4361C11.2649 20.0962 10.9141 15.968 13.1985 12.9744C17.1799 7.74493 28.8629 7.42642 33.8866 11.3756C38.5247 15.0395 37.2724 19.9026 33.5296 19.9026C29.0281 19.9026 31.3941 13.8904 24.1269 13.8904C18.8585 13.8904 16.7862 17.7146 20.4963 19.5757C25.5261 22.1259 38.3432 21.2745 38.3432 31.24C38.333 35.3869 35.8426 38.4784 31.9632 40.0938Z" fill="white" />
                    </svg>
                </label>
            </div>
            <div class="communication-format__item" title="zoom">
                <input class="communication-format__checkbox" id="feedback-zoom" type="checkbox" />
                <label class="communication-format__label" for="feedback-zoom">
                    <svg width="49" height="51" viewBox="0 0 49 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="communication-format__svg" d="M24.5 0.980835C10.9693 0.980835 0 12.1783 0 25.9904C0 39.8025 10.9693 51 24.5 51C38.0307 51 49 39.8025 49 25.9904C49 12.1783 38.0307 0.980835 24.5 0.980835ZM30.2625 33.0569C30.261 33.2658 30.1784 33.4655 30.0329 33.6123C29.8873 33.7591 29.6907 33.841 29.4861 33.8399H14.3501C13.224 33.8443 12.1422 33.3921 11.3423 32.5828C10.5425 31.7735 10.0901 30.6732 10.0844 29.5237V18.9239C10.0859 18.7151 10.1684 18.5153 10.314 18.3686C10.4596 18.2218 10.6562 18.1399 10.8608 18.1409H25.9968C27.1229 18.1366 28.2047 18.5887 29.0045 19.398C29.8044 20.2073 30.2568 21.3076 30.2625 22.4572V33.0569ZM38.4385 33.0951C38.4385 34.0405 37.924 33.9259 37.475 33.5821L31.226 28.9316V23.0588L37.475 18.3987C38.0176 17.9404 38.4385 18.055 38.4385 18.8858V33.0951Z" fill="white" />
                    </svg>
                </label>
            </div>
            <div class="communication-format__item" title="viber">
                <input class="communication-format__checkbox" id="feedback-viber" type="checkbox" />
                <label class="communication-format__label" for="feedback-viber">
                    <svg width="49" height="51" viewBox="0 0 49 51" xmlns="http://www.w3.org/2000/svg">
                        <path class="communication-format__svg" d="M24.5061 0H24.4939C10.9852 0 0 11.2168 0 25.0096C0 30.4805 1.72725 35.5512 4.66419 39.6684L1.61088 48.9594L11.0281 45.8864C14.9021 48.5061 19.5234 50.0192 24.5061 50.0192C38.0148 50.0192 49 38.7993 49 25.0096C49 11.2199 38.0148 0 24.5061 0ZM38.7621 35.3167C38.171 37.0205 35.8251 38.4335 33.9539 38.8462C32.6738 39.1244 31.0017 39.3464 25.3728 36.9642C18.1729 33.9193 13.5363 26.4508 13.1749 25.9662C12.8288 25.4817 10.2655 22.0116 10.2655 18.4227C10.2655 14.8338 12.0509 13.0863 12.7706 12.336C13.3617 11.7201 14.3386 11.4388 15.2758 11.4388C15.5789 11.4388 15.8515 11.4544 16.0965 11.4669C16.8162 11.4982 17.1776 11.5419 17.6523 12.7018C18.2433 14.1554 19.6827 17.7443 19.8542 18.1132C20.0287 18.4821 20.2033 18.9823 19.9583 19.4669C19.7286 19.9671 19.5265 20.189 19.1651 20.6142C18.8037 21.0393 18.4608 21.3645 18.0994 21.8209C17.7686 22.2179 17.395 22.6431 17.8115 23.3777C18.228 24.0968 19.6674 26.4946 21.7866 28.4203C24.5214 30.9056 26.7387 31.6997 27.5319 32.0373C28.1229 32.2874 28.8273 32.228 29.2591 31.7591C29.8073 31.1557 30.4841 30.1553 31.1732 29.1706C31.6632 28.4641 32.2818 28.3765 32.9311 28.6266C33.5926 28.8611 37.093 30.6274 37.8127 30.9932C38.5324 31.3621 39.0071 31.5371 39.1816 31.8466C39.3531 32.1561 39.3531 33.6098 38.7621 35.3167Z" fill="white" />
                    </svg>
                </label>
            </div>
        </div>

        <div class="popup-feedback__consent">
            <div class="popup-feedback__consent-form-wrapper">
                <input class="popup-feedback__consent-input" id="consent3" type="checkbox" checked="checked" />
                <label class="popup-feedback__consent-form" for="consent3">
                    <a href="./article-data-processing.html" target="_blank">
    Нажимая кнопку «Отправить», я даю свое согласие на обработку моих персональных данных, в соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных», на условиях и для целей, определенных в Согласии на обработку персональных данных.
                    </a>
                </label>
            </div>
            <div class="popup-feedback__consent-form-wrapper">
                <input class="popup-feedback__consent-input" id="consent4" type="checkbox" checked="checked" />
                <label class="popup-feedback__consent-form" for="consent4">
                    <a href="./article-privacy-policy.html" target="_blank">
    Оставляя данные на Сайте, заполняя регистрационную форму, Вы соглашаетесь с настоящей Политикой конфиденциальности.
                    </a>
                </label>
            </div>
        </div>

        <div class="popup-feedback__button-cover">
            <button type="submit" class="button button_modal-gold js-button-submit">отправить</button>
        </div>
    </form>
</template>
<template id="popup-calculate-project">
    <form action="" class="js-validated-form">
        <div class="popup-feedback__input-cover">
            <label for="" class="popup-feedback__input-label">Ваше имя и фамилия:</label>
            <input type="text" class="popup-feedback__input js-validated-field" data-validated_name="name" />
        </div>

        <div class="popup-feedback__double-column">
            <div class="popup-feedback__input-cover">
                <label for="" class="popup-feedback__input-label">Телефон</label>
                <input type="tel" class="popup-feedback__input mask-phone-js js-validated-field" data-validated_name="phone" />
            </div>
            <div class="popup-feedback__input-cover">
                <label for="" class="popup-feedback__input-label">Email</label>
                <input type="mail" class="popup-feedback__input js-validated-field" data-validated_name="mail" />
            </div>
        </div>

        <div class="popup-feedback__input-cover">
            <label for="" class="popup-feedback__input-label">Название компании:</label>
            <input type="text" class="popup-feedback__input" />
        </div>

        <div class="popup-feedback__input-cover">
            <label for="" class="popup-feedback__input-label">Опишите Вашу задачу:</label>
            <textarea name="" id="" class="popup-feedback__textarea"></textarea>
        </div>

        <div class="popup-feedback__consent">
            <div class="popup-feedback__consent-form-wrapper">
                <input class="popup-feedback__consent-input" id="consent1" type="checkbox" checked="checked" />
                <label class="popup-feedback__consent-form" for="consent1">
                    <a href="./article-data-processing.html" target="_blank">
    Нажимая кнопку «Отправить», я даю свое согласие на обработку моих персональных данных, в соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных», на условиях и для целей, определенных в Согласии на обработку персональных данных.
                    </a>
                </label>
            </div>
            <div class="popup-feedback__consent-form-wrapper">
                <input class="popup-feedback__consent-input" id="consent2" type="checkbox" checked="checked" />
                <label class="popup-feedback__consent-form" for="consent2">
                    <a href="./article-privacy-policy.html" target="_blank">
    Оставляя данные на Сайте, заполняя регистрационную форму, Вы соглашаетесь с настоящей Политикой конфиденциальности.
                    </a>
                </label>
            </div>
        </div>

        <div class="popup-feedback__button-cover">
            <button type="submit" class="button button_modal-gold js-button-submit">отправить</button>
        </div>
    </form>
</template>
