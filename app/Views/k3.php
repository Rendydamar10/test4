<?php

if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
  header("location: " . base_url('login-member'));
  exit();
}

?>
<!DOCTYPE html>
<html class="avada-html-layout-wide avada-html-header-position-top avada-is-100-percent-template awb-scroll"
    lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">

<head>

    <style id="litespeed-ccss">
        .qlwapp-whatsapp-icon {
            font-family: "qlwapp-whatsapp" !important;
            speak: none;
            font-style: normal;
            font-weight: 400;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .qlwapp-whatsapp-icon:before {
            content: ""
        }

        #qlwapp {
            box-sizing: border-box;
            font-size: var(--qlwapp-scheme-font-size)
        }

        @media (min-width:430px) {
            #qlwapp {
                width: 430px
            }
        }

        #qlwapp * {
            box-sizing: border-box
        }

        #qlwapp.qlwapp-bottom-right {
            position: fixed;
            z-index: 9999999
        }

        #qlwapp.qlwapp-bottom-right {
            left: auto;
            right: 0
        }

        #qlwapp.qlwapp-bottom-right .qlwapp-toggle .qlwapp-days {
            left: auto;
            right: 0
        }

        #qlwapp.qlwapp-bottom-right.qlwapp-bubble .qlwapp-toggle {
            margin-right: 20px
        }

        #qlwapp.qlwapp-bottom-right {
            top: auto;
            bottom: 0
        }

        #qlwapp.qlwapp-rounded.qlwapp-bubble .qlwapp-toggle {
            border-radius: 50%
        }

        @media (min-width:430px) {
            #qlwapp.qlwapp-rounded .qlwapp-box {
                border-radius: 8px
            }
        }

        #qlwapp.qlwapp-rounded .qlwapp-box .qlwapp-message {
            border-radius: 4px
        }

        #qlwapp .qlwapp-container {
            display: flex;
            flex-direction: column
        }

        #qlwapp .qlwapp-previous,
        #qlwapp .qlwapp-close {
            font-family: "Source Serif Pro";
            display: block;
            opacity: .8;
            font-style: unset;
            font-size: 24px;
            font-weight: 700;
            width: 24px;
            height: 24px;
            text-align: center;
            line-height: 24px;
            z-index: 1
        }

        #qlwapp .qlwapp-previous {
            width: 16px;
            height: 36px;
            text-align: center;
            line-height: 36px;
            margin-right: auto
        }

        #qlwapp .qlwapp-toggle {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-left: auto;
            margin-right: auto
        }

        #qlwapp .qlwapp-toggle {
            box-shadow: 0 1px 6px 0 rgba(0, 0, 0, .06), 0 2px 32px 0 rgba(0, 0, 0, .16);
            margin-top: 24px;
            margin-bottom: 24px;
            position: relative;
            text-decoration: none
        }

        #qlwapp .qlwapp-toggle {
            outline: none;
            text-decoration: none
        }

        #qlwapp .qlwapp-toggle .qlwapp-days {
            position: absolute;
            bottom: -2em;
            color: initial;
            font-size: 10px;
            display: inline-block;
            top: auto;
            width: 120px
        }

        #qlwapp .qlwapp-days>span {
            display: none
        }

        #qlwapp .qlwapp-avatar .qlwapp-avatar-container {
            overflow: hidden;
            border-radius: 50%;
            width: inherit;
            height: inherit;
            box-shadow: 0 0 0 2px #eee
        }

        #qlwapp .qlwapp-avatar .qlwapp-avatar-container img {
            width: 100%;
            height: auto
        }

        #qlwapp.qlwapp-bubble .qlwapp-toggle {
            width: var(--qlwapp-scheme-icon-size, 60px);
            height: var(--qlwapp-scheme-icon-size, 60px)
        }

        #qlwapp.qlwapp-bubble .qlwapp-toggle .qlwapp-icon,
        #qlwapp.qlwapp-bubble .qlwapp-toggle .qlwapp-close {
            position: absolute;
            display: block;
            font-size: var(--qlwapp-scheme-icon-font-size, 24px)
        }

        #qlwapp .qlwapp-box {
            padding-bottom: 56px;
            position: fixed;
            top: auto;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 99999;
            box-shadow: 0px 5px 40px 5px rgba(0, 0, 0, .5)
        }

        @media (min-width:430px) {
            #qlwapp .qlwapp-box {
                position: relative;
                top: auto;
                bottom: auto;
                left: auto;
                right: auto;
                box-shadow: 0 8px 25px -5px rgba(45, 62, 79, .15);
                margin-top: 24px;
                margin-left: 24px;
                margin-right: 24px;
                margin-bottom: 12px
            }

            #qlwapp .qlwapp-box:before {
                content: "";
                position: absolute;
                bottom: -6px;
                right: 24px;
                width: 13px;
                height: 13px;
                transform: rotate(45deg)
            }

            #qlwapp .qlwapp-box .qlwapp-header {
                border-top-left-radius: inherit;
                border-top-right-radius: inherit
            }

            #qlwapp .qlwapp-box .qlwapp-footer,
            #qlwapp .qlwapp-box .qlwapp-response {
                border-bottom-left-radius: inherit;
                border-bottom-right-radius: inherit
            }
        }

        #qlwapp .qlwapp-box .qlwapp-header {
            position: relative;
            overflow: hidden
        }

        #qlwapp .qlwapp-box .qlwapp-header:before {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(315deg, transparent 0%, rgba(0, 0, 0, .05) 100%)
        }

        #qlwapp .qlwapp-box .qlwapp-header .qlwapp-close {
            position: absolute;
            top: 12px;
            right: 12px
        }

        @media (min-width:430px) {
            #qlwapp .qlwapp-box .qlwapp-header .qlwapp-close {
                position: absolute;
                top: 7px;
                right: 7px;
                font-size: 18px
            }
        }

        #qlwapp .qlwapp-box .qlwapp-header .qlwapp-description {
            position: relative;
            display: flex;
            align-items: center
        }

        #qlwapp .qlwapp-box .qlwapp-description,
        #qlwapp .qlwapp-box .qlwapp-contact {
            padding: 12px 36px;
            height: 100%
        }

        #qlwapp .qlwapp-box .qlwapp-description h3 {
            color: inherit;
            font-family: inherit;
            margin: 0
        }

        #qlwapp .qlwapp-box .qlwapp-description h3 {
            margin: 0 0 .25em
        }

        #qlwapp .qlwapp-box .qlwapp-contact {
            display: flex;
            justify-content: flex-end;
            align-items: center
        }

        #qlwapp .qlwapp-box .qlwapp-contact .qlwapp-previous {
            position: relative;
            left: -16px
        }

        #qlwapp .qlwapp-box .qlwapp-contact .qlwapp-previous>i {
            line-height: 36px
        }

        #qlwapp .qlwapp-box .qlwapp-contact .qlwapp-avatar {
            width: 42px;
            height: 42px
        }

        #qlwapp .qlwapp-box .qlwapp-contact .qlwapp-label,
        #qlwapp .qlwapp-box .qlwapp-contact .qlwapp-name {
            color: inherit
        }

        #qlwapp .qlwapp-box .qlwapp-account {
            color: inherit;
            padding: 16px 36px;
            display: flex;
            align-items: center;
            overflow: hidden;
            position: relative;
            width: 100%;
            text-decoration: none
        }

        #qlwapp .qlwapp-box .qlwapp-info {
            padding: 0 16px
        }

        #qlwapp .qlwapp-box .qlwapp-avatar {
            position: relative;
            width: 62px;
            height: 62px
        }

        #qlwapp .qlwapp-box .qlwapp-avatar:after {
            content: "";
            display: block;
            width: 15px;
            height: 15px;
            position: absolute;
            top: 3px;
            right: -2px;
            background-color: rgba(0, 0, 0, 0);
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            z-index: 4
        }

        #qlwapp .qlwapp-box .qlwapp-days,
        #qlwapp .qlwapp-box .qlwapp-time,
        #qlwapp .qlwapp-box .qlwapp-label,
        #qlwapp .qlwapp-box .qlwapp-hidden {
            font-size: 12px;
            line-height: 1.5em;
            opacity: .6;
            display: block
        }

        #qlwapp .qlwapp-box .qlwapp-days,
        #qlwapp .qlwapp-box .qlwapp-time {
            font-size: 11px;
            font-style: italic
        }

        #qlwapp .qlwapp-box .qlwapp-name {
            display: block;
            font-weight: 700;
            line-height: 1.5em
        }

        #qlwapp .qlwapp-box .qlwapp-body {
            overflow-x: hidden;
            overflow-y: auto
        }

        #qlwapp .qlwapp-box .qlwapp-body .qlwapp-carousel {
            max-height: 470px;
            min-height: 134px
        }

        #qlwapp .qlwapp-box .qlwapp-chat {
            padding: 36px 0;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            justify-content: center;
            align-items: center;
            height: 100%
        }

        #qlwapp .qlwapp-box .qlwapp-message {
            padding: 16px 24px;
            position: relative;
            word-wrap: break-word;
            width: calc(100% - 72px)
        }

        #qlwapp .qlwapp-box .qlwapp-message:before {
            content: "";
            position: absolute;
            top: -6px;
            right: 24px;
            width: 13px;
            height: 13px;
            transform: rotate(45deg)
        }

        #qlwapp .qlwapp-box .qlwapp-message {
            word-break: break-all
        }

        #qlwapp .qlwapp-box .qlwapp-footer,
        #qlwapp .qlwapp-box .qlwapp-response {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: auto;
            width: 100%
        }

        #qlwapp .qlwapp-box .qlwapp-footer,
        #qlwapp .qlwapp-box .qlwapp-response,
        #qlwapp .qlwapp-box .qlwapp-response pre,
        #qlwapp .qlwapp-box .qlwapp-response textarea {
            max-height: 160px
        }

        #qlwapp .qlwapp-box .qlwapp-response pre,
        #qlwapp .qlwapp-box .qlwapp-response textarea {
            color: inherit;
            background-color: inherit
        }

        #qlwapp .qlwapp-box .qlwapp-footer:before,
        #qlwapp .qlwapp-box .qlwapp-response:before {
            position: absolute;
            content: "";
            height: 59px;
            top: 0;
            background: linear-gradient(315deg, transparent 0%, rgba(0, 0, 0, .025) 100%);
            left: 0;
            right: 0
        }

        #qlwapp .qlwapp-box .qlwapp-footer {
            min-height: 56px;
            display: flex;
            align-items: center;
            text-align: center;
            font-size: 12px;
            padding: 12px 36px
        }

        #qlwapp .qlwapp-box .qlwapp-response,
        #qlwapp .qlwapp-box .qlwapp-response pre,
        #qlwapp .qlwapp-box .qlwapp-response textarea,
        #qlwapp .qlwapp-box .qlwapp-response .qlwapp-buttons {
            min-height: 56px
        }

        #qlwapp .qlwapp-box .qlwapp-response pre,
        #qlwapp .qlwapp-box .qlwapp-response textarea {
            width: 100%;
            height: 100%;
            resize: none;
            border: none;
            padding: 18px 88px 18px 36px;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 1em !important;
            font-weight: 400;
            line-height: 20px;
            white-space: pre-wrap;
            word-wrap: break-word;
            border-radius: inherit;
            margin: 0
        }

        #qlwapp .qlwapp-box .qlwapp-response pre {
            visibility: hidden
        }

        #qlwapp .qlwapp-box .qlwapp-response textarea {
            position: absolute;
            bottom: 0;
            left: 0
        }

        #qlwapp .qlwapp-box .qlwapp-response .qlwapp-buttons {
            position: absolute;
            top: 0;
            right: 21px;
            display: flex;
            align-items: center
        }

        #qlwapp .qlwapp-box .qlwapp-response .qlwapp-buttons>i {
            opacity: .4
        }

        #qlwapp .qlwapp-box .qlwapp-response .qlwapp-buttons>i,
        #qlwapp .qlwapp-box .qlwapp-response .qlwapp-buttons>a {
            margin: 0 0 0 10px;
            display: inherit;
            font-size: 18px;
            line-height: 24px;
            text-decoration: none
        }

        #qlwapp .qlwapp-box,
        #qlwapp .qlwapp-box:before {
            background-color: #fff
        }

        #qlwapp .qlwapp-box .qlwapp-account {
            background-color: #fff
        }

        #qlwapp .qlwapp-box .qlwapp-account:not(:first-child) {
            border-top: 1px solid #f5f5f5
        }

        #qlwapp .qlwapp-box .qlwapp-avatar .qlwapp-avatar-container {
            background-color: #eee
        }

        #qlwapp .qlwapp-box .qlwapp-message,
        #qlwapp .qlwapp-box .qlwapp-message:before {
            background-color: #eee
        }

        #qlwapp .qlwapp-box .qlwapp-footer,
        #qlwapp .qlwapp-box .qlwapp-response {
            color: #303030;
            background-color: #fff;
            border-top: 1px solid #e6e6e6
        }

        #qlwapp .qlwapp-toggle,
        #qlwapp .qlwapp-box .qlwapp-header {
            background-color: var(--qlwapp-scheme-brand, #25d366)
        }

        #qlwapp .qlwapp-previous,
        #qlwapp .qlwapp-close,
        #qlwapp .qlwapp-toggle,
        #qlwapp .qlwapp-box .qlwapp-header,
        #qlwapp .qlwapp-box .qlwapp-contact {
            color: var(--qlwapp-scheme-text, #fff)
        }

        #qlwapp .qlwapp-info .qlwapp-label {
            color: var(--qlwapp-scheme-contact-role-color, inherit)
        }

        #qlwapp .qlwapp-info .qlwapp-name {
            color: var(--qlwapp-scheme-contact-name-color, inherit)
        }

        #qlwapp .qlwapp-info .qlwapp-time {
            color: var(--qlwapp-scheme-contact-availability-color, inherit)
        }

        #qlwapp {
            animation-duration: 1.5s;
            animation-timing-function: ease-in;
            animation-name: var(--qlwapp-button-animation-name, "none");
            animation-delay: var(--qlwapp-button-animation-delay, 0);
            animation-iteration-count: 1;
            transform-origin: center;
            display: none
        }

        #qlwapp.qlwapp-bubble .qlwapp-toggle .qlwapp-close {
            transform: scale(0, 0);
            opacity: 0
        }

        #qlwapp.qlwapp-bubble .qlwapp-toggle .qlwapp-icon {
            transform: scale(1, 1);
            opacity: 1
        }

        #qlwapp .qlwapp-box {
            display: none;
            opacity: 0;
            visibility: hidden;
            transform: translateY(50px)
        }

        @media (min-width:430px) {
            #qlwapp .qlwapp-box {
                transform: translateY(50px) scale(.9)
            }
        }

        #qlwapp .qlwapp-box .qlwapp-carousel {
            display: flex;
            width: 200%;
            height: 100%
        }

        #qlwapp .qlwapp-box .qlwapp-carousel .qlwapp-slide {
            width: 50%
        }

        #qlwapp .qlwapp-box .qlwapp-header .qlwapp-slide {
            max-height: 300px
        }

        #qlwapp .qlwapp-box .qlwapp-header .qlwapp-name,
        #qlwapp .qlwapp-box .qlwapp-header .qlwapp-label,
        #qlwapp .qlwapp-box .qlwapp-header .qlwapp-avatar {
            opacity: 0
        }

        #qlwapp .qlwapp-box .qlwapp-header .qlwapp-name,
        #qlwapp .qlwapp-box .qlwapp-header .qlwapp-label {
            transform: translateX(56px)
        }

        #qlwapp .qlwapp-box .qlwapp-header .qlwapp-avatar {
            transform: scale(.5)
        }

        #qlwapp .qlwapp-box .qlwapp-response,
        #qlwapp .qlwapp-box .qlwapp-previous {
            opacity: 0
        }

        #qlwapp .qlwapp-box .qlwapp-previous {
            transform: translateX(56px)
        }

        #qlwapp .qlwapp-box .qlwapp-slide .qlwapp-message {
            opacity: 0;
            transform: translateY(-56px)
        }

        [class^=qlwf-] {
            font-family: 'qlwf' !important;
            speak: none;
            font-style: normal;
            font-weight: 400;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .qlwf-send:before {
            content: "\e928"
        }

        .qlwf-emoji:before {
            content: "\e925"
        }

        .qlwf-arrow_left:before {
            content: "\e929"
        }

        .screen-reader-text {
            clip: rect(1px, 1px, 1px, 1px);
            word-wrap: normal !important;
            border: 0;
            -webkit-clip-path: inset(50%);
            clip-path: inset(50%);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            overflow-wrap: normal !important;
            padding: 0;
            position: absolute !important;
            width: 1px
        }

        :root {
            --woocommerce: #a46497;
            --wc-green: #7ad03a;
            --wc-red: #a00;
            --wc-orange: #ffba00;
            --wc-blue: #2ea2cc;
            --wc-primary: #a46497;
            --wc-primary-text: #fff;
            --wc-secondary: #ebe9eb;
            --wc-secondary-text: #515151;
            --wc-highlight: #77a464;
            --wc-highligh-text: #fff;
            --wc-content-bg: #fff;
            --wc-subtext: #767676
        }

        :root {
            --button_padding: 11px 23px
        }

        .fusion-faqs-wrapper {
            display: none
        }

        #wrapper .fusion-faqs-wrapper .fusion-accordian .panel-title {
            font-family: var(--faq_accordion_title_typography-font-family);
            font-weight: var(--faq_accordion_title_typography-font-weight);
            line-height: var(--faq_accordion_title_typography-line-height);
            letter-spacing: var(--faq_accordion_title_typography-letter-spacing);
            font-size: var(--faq_accordion_title_typography-font-size);
            text-transform: var(--faq_accordion_title_typography-text-transform)
        }

        #wrapper .fusion-faqs-wrapper .fusion-accordian .panel-title a {
            color: var(--faq_accordion_title_typography-color)
        }

        .fusion-faqs-wrapper .fusion-accordian .panel-body {
            font-family: var(--faq_accordion_content_typography-font-family);
            font-weight: var(--faq_accordion_content_typography-font-weight);
            line-height: var(--faq_accordion_content_typography-line-height);
            letter-spacing: var(--faq_accordion_content_typography-letter-spacing);
            font-size: var(--faq_accordion_content_typography-font-size);
            color: var(--faq_accordion_content_typography-color);
            text-transform: var(--faq_accordion_content_typography-text-transform)
        }

        .fusion-faq-post {
            position: relative
        }

        [class*=" awb-icon-"] {
            font-family: awb-icons !important;
            speak: never;
            font-style: normal;
            font-weight: 400;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .awb-icon-minus:before {
            content: "\e61c"
        }

        .awb-icon-plus:before {
            content: "\e61d"
        }

        * {
            box-sizing: border-box
        }

        textarea {
            -webkit-appearance: none;
            -webkit-border-radius: 0
        }

        body {
            margin: 0;
            min-width: 320px;
            -webkit-text-size-adjust: 100%;
            overflow-x: hidden;
            overflow-y: scroll;
            color: var(--body_typography-color);
            font-size: var(--body_typography-font-size, 16px);
            font-family: var(--body_typography-font-family, inherit)
        }

        #boxed-wrapper {
            overflow-x: hidden;
            overflow-x: clip
        }

        #wrapper {
            overflow: visible
        }

        img {
            border-style: none;
            vertical-align: top;
            max-width: 100%;
            height: auto
        }

        a {
            text-decoration: none
        }

        textarea {
            font-family: var(--body_typography-font-family, inherit);
            vertical-align: middle;
            color: var(--body_typography-color)
        }

        #main {
            padding: 55px 10px 45px;
            clear: both
        }

        #content {
            width: 71.1702128%;
            float: left;
            min-height: 1px
        }

        #content.full-width {
            width: 100%
        }

        .toggle-content {
            padding-top: 10px;
            padding-bottom: 15px;
            position: relative
        }

        .post-content p {
            margin: 0 0 20px
        }

        .fusion-animated {
            position: relative;
            z-index: 2000
        }

        .layout-wide-mode #wrapper {
            width: 100%;
            max-width: none
        }

        #sliders-container {
            position: relative
        }

        .fusion-row {
            margin: 0 auto
        }

        .fusion-row:after,
        .fusion-row:before {
            content: " ";
            display: table
        }

        .fusion-row:after {
            clear: both
        }

        strong {
            font-weight: bolder
        }

        .screen-reader-text {
            border: 0;
            clip: rect(1px, 1px, 1px, 1px);
            -webkit-clip-path: inset(50%);
            clip-path: inset(50%);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute !important;
            width: 1px;
            word-wrap: normal !important
        }

        .post-content p {
            margin-top: 0;
            margin-bottom: 20px
        }

        .rich-snippet-hidden {
            display: none
        }

        .fusion-page-load-link {
            display: none
        }

        .fusion-disable-outline textarea {
            outline: 0
        }

        html:not(.avada-html-layout-boxed):not(.avada-html-layout-framed),
        html:not(.avada-html-layout-boxed):not(.avada-html-layout-framed) body {
            background-color: var(--bg_color);
            background-blend-mode: var(--bg-color-overlay)
        }

        body {
            background-image: var(--bg_image);
            background-repeat: var(--bg_repeat)
        }

        #main,
        .layout-wide-mode #main,
        .layout-wide-mode #wrapper,
        body,
        html {
            background-color: var(--content_bg_color)
        }

        #main {
            background-image: var(--content_bg_image);
            background-repeat: var(--content_bg_repeat)
        }

        html.awb-scroll {
            scrollbar-width: thin;
            scrollbar-color: var(--scrollbar_handle) var(--scrollbar_background)
        }

        html.awb-scroll::-webkit-scrollbar {
            width: 10px
        }

        html.awb-scroll::-webkit-scrollbar-track {
            background: var(--scrollbar_background)
        }

        html.awb-scroll::-webkit-scrollbar-thumb {
            background-color: var(--scrollbar_handle);
            border-radius: 5px
        }

        textarea {
            background-color: var(--form_bg_color);
            font-size: var(--form_text_size);
            color: var(--form_text_color)
        }

        textarea {
            border-width: var(--form_border_width-top) var(--form_border_width-right) var(--form_border_width-bottom) var(--form_border_width-left);
            border-color: var(--form_border_color);
            border-radius: var(--form_border_radius)
        }

        :root {
            --adminbar-height: 0px
        }

        #main .fusion-row {
            max-width: var(--site_width)
        }

        html:not(.avada-has-site-width-percent) #main {
            padding-left: 30px;
            padding-right: 30px
        }

        html:not(.avada-has-site-width-percent) #main.width-100 {
            padding-left: var(--hundredp_padding-fallback_to_zero);
            padding-right: var(--hundredp_padding-fallback_to_zero)
        }

        .width-100 .fusion-fullwidth,
        .width-100 .nonhundred-percent-fullwidth {
            margin-left: var(--hundredp_padding-hundred_percent_negative_margin);
            margin-right: var(--hundredp_padding-hundred_percent_negative_margin)
        }

        .width-100 .fusion-fullwidth .fusion-fullwidth,
        .width-100 .fusion-fullwidth .nonhundred-percent-fullwidth {
            margin-left: 0;
            margin-right: 0
        }

        #main {
            padding-left: 30px;
            padding-right: 30px;
            padding-top: var(--main_padding-top);
            padding-bottom: var(--main_padding-bottom)
        }

        #main.width-100 {
            padding-left: var(--hundredp_padding-fallback_to_zero);
            padding-right: var(--hundredp_padding-fallback_to_zero)
        }

        html.avada-is-100-percent-template #main {
            padding-left: 0;
            padding-right: 0
        }

        html.avada-is-100-percent-template #main.width-100 {
            padding-left: var(--hundredp_padding-fallback_to_zero);
            padding-right: var(--hundredp_padding-fallback_to_zero)
        }

        .layout-wide-mode #wrapper {
            width: 100%;
            max-width: none
        }

        .fusion-megamenu-widgets-container,
        body {
            font-family: var(--body_typography-font-family);
            font-weight: var(--body_typography-font-weight);
            letter-spacing: var(--body_typography-letter-spacing);
            font-style: var(--body_typography-font-style, normal)
        }

        body {
            font-size: var(--body_typography-font-size)
        }

        .fusion-accordian .panel-body,
        .fusion-megamenu-widgets-container,
        body {
            line-height: var(--body_typography-line-height)
        }

        body {
            color: var(--body_typography-color)
        }

        body a,
        body a:after,
        body a:before {
            color: var(--link_color)
        }

        .fusion-title h1,
        .post-content h1,
        h1 {
            font-family: var(--h1_typography-font-family);
            font-weight: var(--h1_typography-font-weight);
            line-height: var(--h1_typography-line-height);
            letter-spacing: var(--h1_typography-letter-spacing);
            text-transform: var(--h1_typography-text-transform);
            font-style: var(--h1_typography-font-style, normal)
        }

        .post-content h1,
        h1 {
            font-size: var(--h1_typography-font-size)
        }

        .post-content h1,
        .title h1,
        h1 {
            color: var(--h1_typography-color)
        }

        h1 {
            margin-top: var(--h1_typography-margin-top);
            margin-bottom: var(--h1_typography-margin-bottom)
        }

        .post-content h2,
        h2 {
            font-family: var(--h2_typography-font-family);
            font-weight: var(--h2_typography-font-weight);
            line-height: var(--h2_typography-line-height);
            letter-spacing: var(--h2_typography-letter-spacing);
            text-transform: var(--h2_typography-text-transform);
            font-style: var(--h2_typography-font-style, normal)
        }

        .post-content h2,
        h2 {
            font-size: var(--h2_typography-font-size)
        }

        h2 {
            color: var(--h2_typography-color)
        }

        .fusion-title-size-two,
        h2 {
            margin-top: var(--h2_typography-margin-top);
            margin-bottom: var(--h2_typography-margin-bottom)
        }

        h3 {
            font-family: var(--h3_typography-font-family);
            font-weight: var(--h3_typography-font-weight);
            line-height: var(--h3_typography-line-height);
            letter-spacing: var(--h3_typography-letter-spacing);
            text-transform: var(--h3_typography-text-transform);
            font-style: var(--h3_typography-font-style, normal)
        }

        h3 {
            font-size: var(--h3_typography-font-size)
        }

        h3 {
            color: var(--h3_typography-color)
        }

        h3 {
            margin-top: var(--h3_typography-margin-top);
            margin-bottom: var(--h3_typography-margin-bottom)
        }

        .post-content h4,
        h4 {
            font-family: var(--h4_typography-font-family);
            font-weight: var(--h4_typography-font-weight);
            line-height: var(--h4_typography-line-height);
            letter-spacing: var(--h4_typography-letter-spacing);
            text-transform: var(--h4_typography-text-transform);
            font-style: var(--h4_typography-font-style, normal)
        }

        h4 {
            line-height: var(--h4_typography-line-height)
        }

        .post-content h4,
        h4 {
            font-size: var(--h4_typography-font-size)
        }

        .post-content h4,
        h4 {
            color: var(--h4_typography-color)
        }

        h4 {
            margin-top: var(--h4_typography-margin-top);
            margin-bottom: var(--h4_typography-margin-bottom)
        }

        :root {
            --awb-color1: #fff;
            --awb-color1-h: 0;
            --awb-color1-s: 0%;
            --awb-color1-l: 100%;
            --awb-color1-a: 100%;
            --awb-color2: #e2e2e2;
            --awb-color2-h: 0;
            --awb-color2-s: 0%;
            --awb-color2-l: 89%;
            --awb-color2-a: 100%;
            --awb-color3: #afc514;
            --awb-color3-h: 67;
            --awb-color3-s: 82%;
            --awb-color3-l: 43%;
            --awb-color3-a: 100%;
            --awb-color4: #fd7813;
            --awb-color4-h: 26;
            --awb-color4-s: 98%;
            --awb-color4-l: 53%;
            --awb-color4-a: 100%;
            --awb-color5: #747474;
            --awb-color5-h: 0;
            --awb-color5-s: 0%;
            --awb-color5-l: 45%;
            --awb-color5-a: 100%;
            --awb-color6: #333;
            --awb-color6-h: 0;
            --awb-color6-s: 0%;
            --awb-color6-l: 20%;
            --awb-color6-a: 100%;
            --awb-color7: #212934;
            --awb-color7-h: 215;
            --awb-color7-s: 22%;
            --awb-color7-l: 17%;
            --awb-color7-a: 100%;
            --awb-color8: #000;
            --awb-color8-h: 0;
            --awb-color8-s: 0%;
            --awb-color8-l: 0%;
            --awb-color8-a: 100%;
            --awb-custom10: #fbcab7;
            --awb-custom10-h: 17;
            --awb-custom10-s: 89%;
            --awb-custom10-l: 85%;
            --awb-custom10-a: 100%;
            --awb-custom11: #d7e289;
            --awb-custom11-h: 67;
            --awb-custom11-s: 61%;
            --awb-custom11-l: 71%;
            --awb-custom11-a: 100%;
            --awb-custom12: #65bc7b;
            --awb-custom12-h: 135;
            --awb-custom12-s: 39%;
            --awb-custom12-l: 57%;
            --awb-custom12-a: 100%;
            --awb-custom13: #f2f2f2;
            --awb-custom13-h: 0;
            --awb-custom13-s: 0%;
            --awb-custom13-l: 95%;
            --awb-custom13-a: 100%;
            --awb-custom14: rgba(242, 243, 245, .8);
            --awb-custom14-h: 220;
            --awb-custom14-s: 13%;
            --awb-custom14-l: 95%;
            --awb-custom14-a: 80%;
            --awb-custom15: #ebeaea;
            --awb-custom15-h: 0;
            --awb-custom15-s: 2%;
            --awb-custom15-l: 92%;
            --awb-custom15-a: 100%;
            --awb-custom16: #999;
            --awb-custom16-h: 0;
            --awb-custom16-s: 0%;
            --awb-custom16-l: 60%;
            --awb-custom16-a: 100%;
            --awb-custom17: #4a4e57;
            --awb-custom17-h: 222;
            --awb-custom17-s: 8%;
            --awb-custom17-l: 32%;
            --awb-custom17-a: 100%;
            --awb-custom18: #e0dede;
            --awb-custom18-h: 0;
            --awb-custom18-s: 3%;
            --awb-custom18-l: 87%;
            --awb-custom18-a: 100%;
            --awb-typography1-font-family: Roboto, Arial, Helvetica, sans-serif;
            --awb-typography1-font-size: 48px;
            --awb-typography1-font-weight: 400;
            --awb-typography1-font-style: normal;
            --awb-typography1-line-height: 1.2;
            --awb-typography1-letter-spacing: -.015em;
            --awb-typography1-text-transform: none;
            --awb-typography2-font-family: Roboto, Arial, Helvetica, sans-serif;
            --awb-typography2-font-size: 24px;
            --awb-typography2-font-weight: 400;
            --awb-typography2-font-style: normal;
            --awb-typography2-line-height: 1.1;
            --awb-typography2-letter-spacing: 0px;
            --awb-typography2-text-transform: none;
            --awb-typography3-font-family: Roboto, Arial, Helvetica, sans-serif;
            --awb-typography3-font-size: 16px;
            --awb-typography3-font-weight: 500;
            --awb-typography3-font-style: normal;
            --awb-typography3-line-height: 1.2;
            --awb-typography3-letter-spacing: .015em;
            --awb-typography3-text-transform: none;
            --awb-typography4-font-family: Roboto, Arial, Helvetica, sans-serif;
            --awb-typography4-font-size: 16px;
            --awb-typography4-font-weight: 400;
            --awb-typography4-font-style: normal;
            --awb-typography4-line-height: 1.72;
            --awb-typography4-letter-spacing: .015em;
            --awb-typography4-text-transform: none;
            --awb-typography5-font-family: Roboto, Arial, Helvetica, sans-serif;
            --awb-typography5-font-size: 13px;
            --awb-typography5-font-weight: 400;
            --awb-typography5-font-style: normal;
            --awb-typography5-line-height: 1.72;
            --awb-typography5-letter-spacing: .015em;
            --awb-typography5-text-transform: none;
            --site_width: 1366px;
            --site_width-int: 1366;
            --margin_offset-top: 0px;
            --margin_offset-bottom: 0px;
            --margin_offset-top-no-percent: 0px;
            --margin_offset-bottom-no-percent: 0px;
            --main_padding-top: 10px;
            --main_padding-top-or-55px: 10px;
            --main_padding-bottom: 30px;
            --hundredp_padding: 12px;
            --hundredp_padding-fallback_to_zero: 12px;
            --hundredp_padding-fallback_to_zero_px: 12px;
            --hundredp_padding-hundred_percent_negative_margin: -12px;
            --sidebar_width: 25%;
            --sidebar_gutter: 6%;
            --sidebar_2_1_width: 21%;
            --sidebar_2_2_width: 21%;
            --dual_sidebar_gutter: 3%;
            --grid_main_break_point: 1000;
            --side_header_break_point: 800;
            --content_break_point: 800;
            --typography_sensitivity: .5;
            --typography_factor: 1.5;
            --primary_color: #dd7600;
            --primary_color-85a: rgba(221, 118, 0, .85);
            --primary_color-7a: rgba(221, 118, 0, .7);
            --primary_color-5a: rgba(221, 118, 0, .5);
            --primary_color-35a: rgba(221, 118, 0, .35);
            --primary_color-2a: rgba(221, 118, 0, .2);
            --header_bg_repeat: repeat;
            --side_header_width: 0px;
            --side_header_width-int: 0;
            --header_padding-top: 10px;
            --header_padding-bottom: 10px;
            --menu_highlight_background: #a0ce4e;
            --menu_arrow_size-width: 23px;
            --menu_arrow_size-height: 12px;
            --nav_highlight_border: 5px;
            --nav_padding: 24px;
            --nav_padding-no-zero: 24px;
            --dropdown_menu_top_border_size: 3px;
            --dropdown_menu_width: 197px;
            --mainmenu_dropdown_vertical_padding: 7px;
            --menu_sub_bg_color: #fff;
            --menu_bg_hover_color: #f8f8f8;
            --menu_sub_sep_color: #dcdadb;
            --menu_h45_bg_color: #fff;
            --nav_typography-font-family: var(--awb-typography3-font-family);
            --nav_typography-font-weight: var(--awb-typography3-font-weight);
            --nav_typography-font-size: 13px;
            --nav_typography-font-style: var(--awb-typography3-font-style);
            --nav_typography-letter-spacing: 0px;
            --nav_typography-color: #000;
            --nav_typography-color-65a: rgba(0, 0, 0, .65);
            --nav_typography-color-35a: rgba(0, 0, 0, .35);
            --menu_hover_first_color: #fd7813;
            --menu_hover_first_color-65a: rgba(253, 120, 19, .65);
            --menu_sub_color: #333;
            --nav_dropdown_font_size: 13px;
            --flyout_menu_icon_font_size: 20px;
            --flyout_menu_icon_font_size_px: 20px;
            --snav_font_size: 12px;
            --sec_menu_lh: 44px;
            --header_top_menu_sub_color: #fd7813;
            --mobile_menu_icons_top_margin: 19px;
            --mobile_menu_nav_height: 64px;
            --mobile_header_bg_color: #fff;
            --mobile_menu_background_color: #fff;
            --mobile_menu_hover_color: #fd7813;
            --mobile_menu_border_color: #dadada;
            --mobile_menu_toggle_color: #333;
            --mobile_menu_typography-font-family: var(--awb-typography3-font-family);
            --mobile_menu_typography-font-size: 14px;
            --mobile_menu_typography-font-weight: var(--awb-typography3-font-weight);
            --mobile_menu_typography-line-height: 64px;
            --mobile_menu_typography-letter-spacing: 0px;
            --mobile_menu_typography-color: #333;
            --mobile_menu_typography-font-style: var(--awb-typography3-font-style);
            --mobile_menu_typography-font-size-30-or-24px: 24px;
            --mobile_menu_typography-font-size-open-submenu: var(--mobile_menu_typography-font-size, 13px);
            --mobile_menu_font_hover_color: #fefefe;
            --menu_icon_size: 12px;
            --logo_alignment: center;
            --logo_background_color: #a0ce4e;
            --slidingbar_width: 300px;
            --slidingbar_width-percent_to_vw: 300px;
            --slidingbar_content_padding-top: 35px;
            --slidingbar_content_padding-bottom: 35px;
            --slidingbar_content_padding-left: 10px;
            --slidingbar_content_padding-right: 10px;
            --slidingbar_bg_color: #fff;
            --slidingbar_divider_color: #282a2b;
            --slidingbar_link_color: #bfbfbf;
            --slidingbar_link_color_hover: #a0ce4e;
            --footer_divider_color: #505152;
            --footer_headings_typography-font-family: var(--awb-typography2-font-family);
            --footer_headings_typography-font-size: 13px;
            --footer_headings_typography-font-weight: var(--awb-typography2-font-weight);
            --footer_headings_typography-line-height: 1.5;
            --footer_headings_typography-font-style: var(--awb-typography2-font-style);
            --footer_headings_typography-letter-spacing: 0px;
            --footer_headings_typography-color: #000;
            --footer_text_color: #262626;
            --sidebar_bg_color: rgba(255, 255, 255, 0);
            --bg_image: none;
            --bg_repeat: repeat;
            --bg_color: #d7d6d6;
            --bg-color-overlay: normal;
            --bg_pattern: url("//www.mymealcatering.com/wp-content/themes/Avada/assets/images/patterns/pattern15.png");
            --content_bg_color: #fff;
            --content_bg_image: none;
            --content_bg_repeat: repeat;
            --body_typography-font-family: var(--awb-typography4-font-family);
            --body_typography-font-size: var(--awb-typography4-font-size);
            --base-font-size: 16;
            --body_typography-font-weight: var(--awb-typography4-font-weight);
            --body_typography-font-style: var(--awb-typography4-font-style);
            --body_typography-line-height: var(--awb-typography4-line-height);
            --body_typography-letter-spacing: var(--awb-typography4-letter-spacing);
            --body_typography-color: var(--awb-color6);
            --link_color: var(--awb-color4);
            --link_color-8a: hsla(var(--awb-color4-h), var(--awb-color4-s), var(--awb-color4-l), calc(var(--awb-color4-a) - 20%));
            --link_hover_color: var(--awb-color6);
            --link_hover_color-85a: hsla(var(--awb-color6-h), var(--awb-color6-s), var(--awb-color6-l), calc(var(--awb-color6-a) - 15%));
            --link_hover_color-7a: hsla(var(--awb-color6-h), var(--awb-color6-s), var(--awb-color6-l), calc(var(--awb-color6-a) - 30%));
            --link_hover_color-5a: hsla(var(--awb-color6-h), var(--awb-color6-s), var(--awb-color6-l), calc(var(--awb-color6-a) - 50%));
            --link_hover_color-35a: hsla(var(--awb-color6-h), var(--awb-color6-s), var(--awb-color6-l), calc(var(--awb-color6-a) - 65%));
            --link_hover_color-2a: hsla(var(--awb-color6-h), var(--awb-color6-s), var(--awb-color6-l), calc(var(--awb-color6-a) - 80%));
            --awb-link_decoration_line: none;
            --awb-link_decoration_style: solid;
            --awb-link_decoration_thickness: 1px;
            --awb-link_decoration_line_hover: none;
            --awb-link_decoration_style_hover: solid;
            --awb-link_decoration_thickness_hover: 1px;
            --h1_typography-font-family: Roboto;
            --h1_typography-font-weight: 500;
            --h1_typography-line-height: var(--awb-typography1-line-height);
            --h1_typography-letter-spacing: var(--awb-typography1-letter-spacing);
            --h1_typography-font-size: 48px;
            --h1_typography-color: var(--awb-color6);
            --h1_typography-text-transform: none;
            --h1_typography-margin-top: 12px;
            --h1_typography-margin-bottom: 9px;
            --h2_typography-font-family: Roboto;
            --h2_typography-font-weight: 500;
            --h2_typography-line-height: var(--awb-typography1-line-height);
            --h2_typography-letter-spacing: var(--awb-typography1-letter-spacing);
            --h2_typography-font-size: 32px;
            --h2_typography-color: var(--awb-color6);
            --h2_typography-text-transform: var(--awb-typography1-text-transform);
            --h2_typography-margin-top: 12px;
            --h2_typography-margin-bottom: 9px;
            --h3_typography-font-family: Roboto;
            --h3_typography-font-weight: 500;
            --h3_typography-line-height: var(--awb-typography1-line-height);
            --h3_typography-letter-spacing: var(--awb-typography1-letter-spacing);
            --h3_typography-font-size: 24px;
            --h3_typography-color: var(--awb-color6);
            --h3_typography-text-transform: var(--awb-typography1-text-transform);
            --h3_typography-margin-top: 12px;
            --h3_typography-margin-bottom: 9px;
            --h4_typography-font-family: var(--awb-typography1-font-family);
            --h4_typography-font-weight: var(--awb-typography1-font-weight);
            --h4_typography-line-height: var(--awb-typography1-line-height);
            --h4_typography-letter-spacing: var(--awb-typography1-letter-spacing);
            --h4_typography-font-style: var(--awb-typography1-font-style);
            --h4_typography-font-size: 16px;
            --h4_typography-color: var(--awb-color6);
            --h4_typography-text-transform: var(--awb-typography1-text-transform);
            --h4_typography-margin-top: .2em;
            --h4_typography-margin-bottom: .2em;
            --h5_typography-font-family: var(--awb-typography1-font-family);
            --h5_typography-font-weight: var(--awb-typography1-font-weight);
            --h5_typography-line-height: var(--awb-typography1-line-height);
            --h5_typography-letter-spacing: var(--awb-typography1-letter-spacing);
            --h5_typography-font-style: var(--awb-typography1-font-style);
            --h5_typography-font-size: 16px;
            --h5_typography-color: var(--awb-color6);
            --h5_typography-text-transform: var(--awb-typography1-text-transform);
            --h5_typography-margin-top: .2em;
            --h5_typography-margin-bottom: .2em;
            --h6_typography-font-family: var(--awb-typography1-font-family);
            --h6_typography-font-weight: var(--awb-typography1-font-weight);
            --h6_typography-line-height: var(--awb-typography1-line-height);
            --h6_typography-letter-spacing: var(--awb-typography1-letter-spacing);
            --h6_typography-font-style: var(--awb-typography1-font-style);
            --h6_typography-font-size: 16px;
            --h6_typography-color: var(--awb-color6);
            --h6_typography-text-transform: var(--awb-typography1-text-transform);
            --h6_typography-margin-top: .2em;
            --h6_typography-margin-bottom: .2em;
            --post_title_typography-font-family: var(--awb-typography1-font-family);
            --post_title_typography-font-weight: var(--awb-typography1-font-weight);
            --post_title_typography-line-height: var(--awb-typography1-line-height);
            --post_title_typography-letter-spacing: var(--awb-typography1-letter-spacing);
            --post_title_typography-font-style: var(--awb-typography1-font-style);
            --post_title_typography-font-size: 32px;
            --post_title_typography-color: var(--awb-color6);
            --post_title_typography-text-transform: var(--awb-typography1-text-transform);
            --post_titles_extras_typography-font-family: var(--awb-typography1-font-family);
            --post_titles_extras_typography-font-weight: var(--awb-typography1-font-weight);
            --post_titles_extras_typography-line-height: var(--awb-typography1-line-height);
            --post_titles_extras_typography-letter-spacing: var(--awb-typography1-letter-spacing);
            --post_titles_extras_typography-font-style: var(--awb-typography1-font-style);
            --post_titles_extras_typography-font-size: 16px;
            --post_titles_extras_typography-color: var(--awb-color6);
            --post_titles_extras_typography-text-transform: var(--awb-typography1-text-transform);
            --blog_archive_grid_column_spacing: 20px;
            --dates_box_color: #eef0f2;
            --meta_font_size: 13px;
            --portfolio_archive_column_spacing: 12px;
            --portfolio_meta_font_size: 13px;
            --social_bg_color: #f6f6f6;
            --social_sharing_padding-top: .2em;
            --social_sharing_padding-right: 20px;
            --social_sharing_padding-bottom: .2em;
            --social_sharing_padding-left: 20px;
            --sharing_social_links_icon_color: #bebdbd;
            --sharing_social_links_box_color: #e8e8e8;
            --sharing_social_links_boxed_padding: 8px;
            --slider_nav_box_dimensions-width: 30px;
            --slider_nav_box_dimensions-height: 30px;
            --slider_arrow_size: 14px;
            --es_caption_font_size: 20px;
            --form_input_height: 29px;
            --form_input_height-main-menu-search-width: 250px;
            --form_text_size: 13px;
            --form_bg_color: #fff;
            --form_text_color: #aaa9a9;
            --form_text_color-35a: rgba(170, 169, 169, .35);
            --form_border_width-top: 1px;
            --form_border_width-bottom: 1px;
            --form_border_width-left: 1px;
            --form_border_width-right: 1px;
            --form_border_color: #d2d2d2;
            --form_focus_border_color: #d2d2d2;
            --form_focus_border_color-5a: rgba(210, 210, 210, .5);
            --form_border_radius: 0px;
            --live_search_results_height: 250px;
            --privacy_bg_color: rgba(0, 0, 0, .1);
            --privacy_color: rgba(0, 0, 0, .3);
            --privacy_bar_padding-top: 15px;
            --privacy_bar_padding-bottom: 15px;
            --privacy_bar_padding-left: 30px;
            --privacy_bar_padding-right: 30px;
            --privacy_bar_bg_color: #363839;
            --privacy_bar_font_size: 13px;
            --privacy_bar_color: #8c8989;
            --privacy_bar_link_color: #bfbfbf;
            --privacy_bar_link_hover_color: #a0ce4e;
            --privacy_bar_headings_color: #ddd;
            --scrollbar_background: var(--awb-color2);
            --scrollbar_handle: var(--awb-color3);
            --related_posts_columns: 3;
            --related_posts_column_spacing: 44px;
            --image_rollover_icon_size: 15px;
            --image_rollover_text_color: #333;
            --pagination_width_height: 30px;
            --pagination_box_padding-width: 6px;
            --pagination_box_padding-height: 2px;
            --pagination_border_width: 1px;
            --pagination_border_radius: 0px;
            --pagination_font_size: 14px;
            --timeline_bg_color: rgba(255, 255, 255, 0);
            --timeline_bg_color-not-transparent: rgba(255, 255, 255, 1);
            --timeline_color: #ebeaea;
            --grid_separator_color: #e0dede;
            --woocommerce_archive_grid_column_spacing: 20px;
            --woocommerce_product_box_content_padding-top: 20px;
            --woocommerce_product_box_content_padding-bottom: 15px;
            --woocommerce_product_box_content_padding-left: 15px;
            --woocommerce_product_box_content_padding-right: 15px;
            --qty_size-width: 42px;
            --qty_size-height: 40px;
            --qty_font_size: 14px;
            --qty_bg_color: #fbfaf9;
            --qty_bg_hover_color: #fff;
            --woo_dropdown_bg_color: #fbfaf9;
            --woo_dropdown_bg_color-1l: rgba(255, 255, 255, 1);
            --woo_dropdown_text_color: #333;
            --woo_dropdown_border_color: #dbdbdb;
            --woo_cart_bg_color: #fafafa;
            --woo_icon_font_size: 12px;
            --fusion-woo-sale-badge-background-color: #a0ce4e;
            --fusion-woo-sale-badge-text-color: #fff;
            --fusion-woo-sale-badge-text-size: 13px;
            --fusion-woo-sale-badge-padding-top: .5em;
            --fusion-woo-sale-badge-padding-bottom: .5em;
            --fusion-woo-sale-badge-padding-left: .5em;
            --fusion-woo-sale-badge-padding-right: .5em;
            --fusion-woo-sale-badge-width-top: 0px;
            --fusion-woo-sale-badge-width-bottom: 0px;
            --fusion-woo-sale-badge-width-left: 0px;
            --fusion-woo-sale-badge-width-right: 0px;
            --fusion-woo-sale-badge-border-color: #fff;
            --fusion-woo-outofstock-badge-background-color: rgba(210, 0, 0, .9);
            --fusion-woo-outofstock-badge-text-color: #fff;
            --fusion-woo-outofstock-badge-text-size: 13px;
            --fusion-woo-outofstock-badge-padding-top: .45em;
            --fusion-woo-outofstock-badge-padding-bottom: .45em;
            --fusion-woo-outofstock-badge-padding-left: 0;
            --fusion-woo-outofstock-badge-padding-right: 0;
            --fusion-woo-outofstock-badge-width-top: 0px;
            --fusion-woo-outofstock-badge-width-bottom: 0px;
            --fusion-woo-outofstock-badge-width-left: 0px;
            --fusion-woo-outofstock-badge-width-right: 0px;
            --fusion-woo-outofstock-badge-border-color: #fff;
            --carousel_nav_color: #999;
            --carousel_hover_color: gray;
            --info_bg_color: var(--awb-color1);
            --info_accent_color: var(--awb-color8);
            --danger_bg_color: rgba(219, 75, 104, .1);
            --danger_accent_color: #db4b68;
            --success_bg_color: rgba(18, 184, 120, .1);
            --success_accent_color: #12b878;
            --warning_bg_color: rgba(241, 174, 42, .1);
            --warning_accent_color: #f1ae2a;
            --alert_border_size: 1px;
            --button_padding-top: 13px;
            --button_padding-bottom: 13px;
            --button_padding-left: 29px;
            --button_padding-right: 29px;
            --button_typography-font-family: var(--awb-typography3-font-family);
            --button_typography-font-weight: var(--awb-typography3-font-weight);
            --button_typography-letter-spacing: 0px;
            --button_typography-font-style: var(--awb-typography3-font-style);
            --button_font_size: 14px;
            --button_line_height: 17px;
            --button_text_transform: none;
            --button_gradient_top_color: var(--awb-color3);
            --button_gradient_bottom_color: var(--awb-color3);
            --button_gradient_top_color_hover: hsla(var(--awb-color3-h), calc(var(--awb-color3-s) - 5%), calc(var(--awb-color3-l) - 10%), var(--awb-color3-a));
            --button_gradient_bottom_color_hover: hsla(var(--awb-color3-h), calc(var(--awb-color3-s) - 5%), calc(var(--awb-color3-l) - 10%), var(--awb-color3-a));
            --button_gradient_start: 0%;
            --button_gradient_end: 100%;
            --button_gradient_angle: 180deg;
            --button_radial_direction: center center;
            --button_accent_color: #fff;
            --button_accent_hover_color: #fff;
            --button_bevel_color: #54770f;
            --button_box_shadow: none;
            --button_bevel_color_hover: #54770f;
            --button_border_width-top: 0px;
            --button_border_width-right: 0px;
            --button_border_width-bottom: 0px;
            --button_border_width-left: 0px;
            --button_border_color: #ff9800;
            --button_border_hover_color: #fb7911;
            --col_margin-top: 10px;
            --col_margin-bottom: 10px;
            --col_spacing: 4%;
            --container_padding_default_top: 0px;
            --container_padding_default_bottom: 0px;
            --container_padding_default_left: 0px;
            --container_padding_default_right: 0px;
            --container_padding_100_top: 0px;
            --container_padding_100_bottom: 0px;
            --container_padding_100_left: 16px;
            --container_padding_100_right: 16px;
            --full_width_bg_color: rgba(255, 255, 255, 0);
            --full_width_border_sizes_top: 0px;
            --full_width_border_sizes_bottom: 0px;
            --full_width_border_sizes_left: 0px;
            --full_width_border_sizes_right: 0px;
            --full_width_border_color: #eae9e9;
            --content_box_bg_color: rgba(255, 255, 255, 0);
            --content_box_title_size: 24px;
            --content_box_title_color: #212934;
            --content_box_body_color: #4a4e57;
            --content_box_icon_color: #fff;
            --content_box_hover_animation_accent_color: #65bc7b;
            --countdown_background_color: var(--awb-color5);
            --countdown_counter_box_spacing: 10px;
            --countdown_counter_box_color: var(--awb-color7);
            --countdown_counter_padding-top: .6em;
            --countdown_counter_padding-right: 1.1em;
            --countdown_counter_padding-bottom: .6em;
            --countdown_counter_padding-left: 1.1em;
            --countdown_counter_border_size: 0;
            --countdown_counter_border_color: var(--awb-color7);
            --countdown_counter_border_radius: 4px;
            --countdown_counter_font_size: 18px;
            --countdown_counter_text_color: var(--awb-color1);
            --countdown_label_font_size: 18px;
            --countdown_label_color: var(--awb-color1);
            --countdown_heading_font_size: 18px;
            --countdown_heading_text_color: var(--awb-color1);
            --countdown_subheading_font_size: 14px;
            --countdown_subheading_text_color: var(--awb-color1);
            --countdown_link_text_color: var(--awb-color1);
            --flip_boxes_flip_duration: .8s;
            --flip_boxes_front_bg: var(--awb-color7);
            --flip_boxes_front_heading: var(--awb-color2);
            --flip_boxes_front_text: var(--awb-color3);
            --flip_boxes_back_bg: var(--awb-color5);
            --flip_boxes_back_heading: var(--awb-color1);
            --flip_boxes_back_text: hsla(var(--awb-color1-h), var(--awb-color1-s), var(--awb-color1-l), calc(var(--awb-color1-a) - 20%));
            --flip_boxes_border_size: 1px;
            --flip_boxes_border_color: rgba(0, 0, 0, 0);
            --flip_boxes_border_radius: 6px;
            --icon_color: #fff;
            --icon_color_hover: #fff;
            --icon_circle_color: #4a4e57;
            --icon_circle_color_hover: #65bc7b;
            --icon_border_size: #fff;
            --icon_border_color: #4a4e57;
            --icon_border_color_hover: #65bc7b;
            --icon_border_top_l_rad: 50%;
            --icon_border_top_r_rad: 50%;
            --icon_border_bot_r_rad: 50%;
            --icon_border_bot_l_rad: 50%;
            --popover_heading_bg_color: var(--awb-color2);
            --popover_content_bg_color: var(--awb-color1);
            --popover_border_color: var(--awb-color3);
            --popover_text_color: var(--awb-color8);
            --pricing_box_color: #8bc34a;
            --sep_color: #e2e2e2;
            --testimonial_bg_color: #f6f6f6;
            --testimonial_text_color: #747474;
            --text_columns: 1;
            --text_column_min_width: 100px;
            --text_column_spacing: 2em;
            --text_rule_style: none;
            --title_border_color: #e0dede;
            --title_margin-top: 0px;
            --title_margin-right: 0px;
            --title_margin-bottom: 31px;
            --title_margin-left: 0px;
            --title_margin_mobile-top: 0px;
            --title_margin_mobile-right: 0px;
            --title_margin_mobile-bottom: 20px;
            --title_margin_mobile-left: 0px;
            --accordion_divider_color: #e2e2e2;
            --accordion_divider_hover_color: #e2e2e2;
            --accordian_inactive_color: #333;
            --accordian_active_color: #a0ce4e;
            --faq_accordion_divider_color: #e2e2e2;
            --faq_accordion_divider_hover_color: #e2e2e2;
            --faq_accordion_title_typography-font-family: var(--awb-typography1-font-family);
            --faq_accordion_title_typography-font-size: 16px;
            --faq_accordion_title_typography-font-weight: var(--awb-typography1-font-weight);
            --faq_accordion_title_typography-color: #dd7600;
            --faq_accordian_icon_color: #fff;
            --faq_accordian_inactive_color: #333;
            --faq_accordion_content_typography-font-family: var(--awb-typography4-font-family);
            --faq_accordion_content_typography-font-size: 16px;
            --faq_accordion_content_typography-font-weight: var(--awb-typography4-font-weight);
            --faq_accordion_content_typography-color: #333
        }

        .fusion-megamenu-submenu {
            --megamenu_item_vertical_padding: 5px
        }

        body {
            --fusion-woo-sale-badge-border-top-left-radius: 50%;
            --fusion-woo-sale-badge-border-top-right-radius: 50%;
            --fusion-woo-sale-badge-border-bottom-right-radius: 50%;
            --fusion-woo-sale-badge-border-bottom-left-radius: 50%;
            --fusion-woo-outofstock-badge-border-top-left-radius: 0px;
            --fusion-woo-outofstock-badge-border-top-right-radius: 0px;
            --fusion-woo-outofstock-badge-border-bottom-right-radius: 0px;
            --fusion-woo-outofstock-badge-border-bottom-left-radius: 0px;
            --button-border-radius-top-left: 5px;
            --button-border-radius-top-right: 5px;
            --button-border-radius-bottom-right: 5px;
            --button-border-radius-bottom-left: 5px;
            --fusion-video-max-width-default: 100%
        }

        @media only screen and (max-width:800px) {
            .fusion-mobile-logo {
                display: inline-block
            }
        }

        .fas {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            line-height: 1
        }

        .fas {
            font-family: "Font Awesome 5 Free";
            font-weight: 900
        }

        .fa-bars:before {
            content: "\f0c9"
        }

        .fa-times:before {
            content: "\f00d"
        }

        .collapse {
            display: none
        }

        .button-default,
        .fusion-button,
        .fusion-button-default {
            --button_margin-top: 0px;
            --button_margin-right: 0px;
            --button_margin-bottom: 0px;
            --button_margin-left: 0px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            position: relative;
            text-decoration: none;
            box-sizing: border-box;
            font-family: var(--button_typography-font-family);
            font-weight: var(--button_typography-font-weight);
            font-style: var(--button_typography-font-style, normal);
            letter-spacing: var(--button_typography-letter-spacing);
            border-width: var(--button_border_width-top, 0) var(--button_border_width-right, 0) var(--button_border_width-bottom, 0) var(--button_border_width-left, 0);
            border-style: solid;
            border-radius: var(--button-border-radius-top-left, 0) var(--button-border-radius-top-right, 0) var(--button-border-radius-bottom-right, 0) var(--button-border-radius-bottom-left, 0);
            text-transform: var(--button_text_transform);
            margin: var(--button_margin-top) var(--button_margin-right) var(--button_margin-bottom) var(--button_margin-left)
        }

        .fusion-body .fusion-button-default-size {
            padding-top: var(--button_padding-top, 13px);
            padding-right: var(--button_padding-right, 29px);
            padding-bottom: var(--button_padding-bottom, 13px);
            padding-left: var(--button_padding-left, 29px);
            line-height: var(--button_line_height, 1);
            font-size: var(--button_font_size, 14px)
        }

        .button-default,
        .fusion-button-default {
            background: var(--button_gradient_top_color);
            color: var(--button_accent_color);
            border-color: var(--button_border_color)
        }

        .button-default .fusion-button-text,
        .fusion-button-default .fusion-button-text {
            color: var(--button_accent_color)
        }

        .button-default:visited,
        .fusion-button-default:visited {
            color: var(--button_accent_color)
        }

        .fusion-button.button-flat {
            box-shadow: none !important
        }

        .fusion-disable-outline .fusion-button {
            outline: 0
        }

        .button-medium {
            padding: 11px 23px;
            line-height: 16px;
            font-size: 13px
        }

        .fusion-button-default-size {
            padding-top: var(--button_padding-top, 13px);
            padding-right: var(--button_padding-right, 29px);
            padding-bottom: var(--button_padding-bottom, 13px);
            padding-left: var(--button_padding-left, 29px);
            line-height: var(--button_line_height, 1);
            font-size: var(--button_font_size, 14px)
        }

        .fusion-image-element {
            --awb-aspect-ratio: 1/1;
            --awb-object-position: 50% 50%;
            --awb-mask-url: "";
            --awb-mask-size: contain;
            --awb-mask-position: center;
            --awb-mask-repeat: no-repeat;
            --awb-margin-top: 0;
            --awb-margin-right: 0;
            --awb-margin-bottom: 0;
            --awb-margin-left: 0;
            --awb-liftup-border-radius: 0;
            --awb-bottom-shadow-color: rgba(0, 0, 0, .4);
            --awb-caption-margin-top: 0;
            --awb-caption-margin-right: 0;
            --awb-caption-margin-bottom: 0;
            --awb-caption-margin-left: 0;
            --awb-caption-border-color: #fff;
            --awb-caption-overlay-color: var(--primary_color);
            --awb-filter: none;
            --awb-filter-hover: none;
            --awb-max-width: 100%;
            --awb-sticky-max-width: var(--awb-max-width);
            --awb-title-text-color: inherit;
            --awb-caption-text-color: inherit;
            --awb-caption-text-size: inherit;
            --awb-caption-text-font-family: var(--body_typography-font-family);
            --awb-caption-text-font-weight: var(--body_typography-font-weight);
            --awb-caption-text-line-height: var(--body_typography-line-height);
            --awb-caption-text-letter-spacing: var(--body_typography-letter-spacing);
            --awb-caption-text-transform: inherit;
            margin-top: var(--awb-margin-top);
            margin-right: var(--awb-margin-right);
            margin-bottom: var(--awb-margin-bottom);
            margin-left: var(--awb-margin-left);
            line-height: 1
        }

        .fusion-imageframe {
            display: inline-block;
            z-index: 1;
            overflow: hidden;
            position: relative;
            vertical-align: middle;
            max-width: var(--awb-max-width);
            line-height: 1;
            filter: var(--awb-filter)
        }

        .fusion-imageframe img {
            vertical-align: top;
            box-shadow: none !important
        }

        .fusion-imageframe img.fusion-mobile-logo {
            display: none
        }

        .awb-menu {
            --awb-font-size: 16px;
            --awb-margin-top: 0px;
            --awb-margin-bottom: 0px;
            --awb-align-item: stretch;
            --awb-justify-content: flex-start;
            --awb-fusion-font-family-typography: inherit;
            --awb-fusion-font-style-typography: inherit;
            --awb-fusion-font-weight-typography: 400;
            --awb-text-transform: none;
            --awb-min-height: 4em;
            --awb-gap: 0px;
            --awb-bg: rgba(0, 0, 0, 0);
            --awb-border-radius-top-left: 0px;
            --awb-border-radius-top-right: 0px;
            --awb-border-radius-bottom-left: 0px;
            --awb-border-radius-bottom-right: 0px;
            --awb-color: #212934;
            --awb-line-height: var(--body_typography-line-height);
            --awb-letter-spacing: var(--body_typography-letter-spacing);
            --awb-items-padding-top: 0px;
            --awb-items-padding-right: 0px;
            --awb-items-padding-bottom: 0px;
            --awb-items-padding-left: 0px;
            --awb-border-top: 0px;
            --awb-border-right: 0px;
            --awb-border-bottom: 0px;
            --awb-border-left: 0px;
            --awb-border-color: rgba(0, 0, 0, 0);
            --awb-active-bg: rgba(0, 0, 0, 0);
            --awb-active-border-top: 0px;
            --awb-active-border-right: 0px;
            --awb-active-border-bottom: 0px;
            --awb-active-border-left: 0px;
            --awb-active-border-color: rgba(0, 0, 0, 0);
            --awb-active-color: #65bc7b;
            --awb-submenu-items-padding-top: 12px;
            --awb-submenu-items-padding-right: 20px;
            --awb-submenu-items-padding-bottom: 12px;
            --awb-submenu-items-padding-left: 20px;
            --awb-submenu-font-size: 14px;
            --awb-submenu-text-transform: none;
            --awb-box-shadow: none;
            --awb-submenu-border-radius-top-left: 0px;
            --awb-submenu-border-radius-top-right: 0px;
            --awb-submenu-border-radius-bottom-left: 0px;
            --awb-submenu-border-radius-bottom-right: 0px;
            --awb-submenu-space: 0px;
            --awb-submenu-max-width: 100%;
            --awb-submenu-sep-color: #e2e2e2;
            --awb-submenu-bg: #fff;
            --awb-sub-justify-content: space-between;
            --awb-submenu-color: #212934;
            --awb-fusion-font-family-submenu-typography: inherit;
            --awb-fusion-font-style-submenu-typography: inherit;
            --awb-fusion-font-weight-submenu-typography: 400;
            --awb-submenu-line-height: inherit;
            --awb-submenu-letter-spacing: inherit;
            --awb-submenu-active-bg: #f9f9fb;
            --awb-submenu-active-color: #212934;
            --awb-icons-size: 16;
            --awb-icons-color: #212934;
            --awb-icons-hover-color: var(--awb-active-color);
            --awb-thumbnail-size-width: 26px;
            --awb-thumbnail-size-width: 14px
        }

        .awb-menu {
            margin-top: var(--awb-margin-top);
            margin-bottom: var(--awb-margin-bottom);
            width: 100%;
            opacity: 1;
            font-size: var(--awb-font-size)
        }

        .awb-menu .awb-menu__main-ul {
            font-size: var(--awb-font-size)
        }

        .awb-menu__main-ul {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            align-items: var(--awb-align-items);
            justify-content: var(--awb-justify-content);
            padding: 0;
            font-family: var(--awb-fusion-font-family-typography);
            font-style: var(--awb-fusion-font-style-typography);
            font-weight: var(--awb-fusion-font-weight-typography);
            text-transform: var(--awb-text-transform);
            margin-block-start: 0;
            margin-block-end: 0;
            min-height: var(--awb-min-height);
            position: relative
        }

        .awb-menu__main-ul_row {
            flex-direction: row
        }

        .awb-menu__main-li {
            position: relative;
            display: flex;
            justify-content: center;
            margin-left: calc(var(--awb-gap)/2);
            margin-right: calc(var(--awb-gap)/2);
            line-height: var(--awb-line-height, inherit);
            letter-spacing: var(--awb-letter-spacing)
        }

        .awb-menu__main-li>* {
            z-index: 10
        }

        .awb-menu__main-li:first-child {
            margin-inline-start: 0
        }

        .awb-menu__main-li:last-child {
            margin-inline-end: 0
        }

        .awb-menu__main-li_regular {
            background-color: var(--awb-bg);
            border-radius: var(--awb-border-radius-top-left) var(--awb-border-radius-top-right) var(--awb-border-radius-bottom-right) var(--awb-border-radius-bottom-left)
        }

        .awb-menu__main-a {
            color: var(--awb-color) !important;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%
        }

        .awb-menu__main-a_regular {
            padding-top: calc(var(--awb-items-padding-top) + var(--awb-border-top));
            padding-right: calc(var(--awb-items-padding-right) + var(--awb-border-right));
            padding-bottom: calc(var(--awb-items-padding-bottom) + var(--awb-border-bottom));
            padding-left: calc(var(--awb-items-padding-left) + var(--awb-border-left))
        }

        .awb-menu__main-background-active,
        .awb-menu__main-background-default {
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            background-color: var(--awb-bg);
            border-top-width: var(--awb-border-top);
            border-right-width: var(--awb-border-right);
            border-bottom-width: var(--awb-border-bottom);
            border-left-width: var(--awb-border-left);
            border-color: var(--awb-border-color);
            border-radius: var(--awb-border-radius-top-left) var(--awb-border-radius-top-right) var(--awb-border-radius-bottom-right) var(--awb-border-radius-bottom-left);
            border-style: solid
        }

        .awb-menu__main-background-active {
            background-color: var(--awb-active-bg);
            border-top-width: var(--awb-active-border-top);
            border-right-width: var(--awb-active-border-right);
            border-bottom-width: var(--awb-active-border-bottom);
            border-left-width: var(--awb-active-border-left);
            border-color: var(--awb-active-border-color)
        }

        .awb-menu__main-background-active_center-grow {
            top: 50%;
            left: 50%;
            opacity: 0;
            transform: translateX(-50%) translateY(-50%) scale(0)
        }

        .awb-menu__main-li_regular.current-menu-item .awb-menu__main-a_regular {
            color: var(--awb-active-color) !important;
            padding-top: calc(var(--awb-items-padding-top) + var(--awb-active-border-top));
            padding-right: calc(var(--awb-items-padding-right) + var(--awb-active-border-right));
            padding-bottom: calc(var(--awb-items-padding-bottom) + var(--awb-active-border-bottom));
            padding-left: calc(var(--awb-items-padding-left) + var(--awb-active-border-left))
        }

        .awb-menu__main-li_regular.current-menu-item .awb-menu__main-background-active_center-grow {
            opacity: 1;
            transform: translateX(-50%) translateY(-50%) scale(1)
        }

        .awb-menu__open-nav-submenu-hover,
        .awb-menu__open-nav-submenu_mobile {
            display: none;
            justify-content: center;
            align-items: center;
            background: 0 0;
            border: 0;
            box-shadow: none;
            box-sizing: border-box;
            padding: 0;
            font-size: var(--awb-font-size)
        }

        .awb-menu__open-nav-submenu-hover:before,
        .awb-menu__open-nav-submenu_mobile:before {
            content: "\f107";
            font-family: awb-icons;
            line-height: 1
        }

        .awb-menu__open-nav-submenu_mobile {
            box-sizing: content-box
        }

        .awb-menu__open-nav-submenu-hover {
            padding-inline-start: .5em
        }

        .awb-menu_dc-yes.awb-menu_em-hover .awb-menu__open-nav-submenu-hover {
            display: flex
        }

        .awb-menu__sub-ul {
            margin: 0;
            list-style: none;
            padding: 0
        }

        .awb-menu__sub-ul {
            font-size: var(--awb-submenu-font-size);
            text-transform: var(--awb-submenu-text-transform);
            border-top-left-radius: var(--awb-submenu-border-radius-top-left);
            border-top-right-radius: var(--awb-submenu-border-radius-top-right);
            border-bottom-left-radius: var(--awb-submenu-border-radius-bottom-left);
            border-bottom-right-radius: var(--awb-submenu-border-radius-bottom-right)
        }

        .awb-menu_dropdown .awb-menu__sub-ul {
            z-index: -10;
            flex-direction: column;
            display: table;
            visibility: hidden;
            opacity: 0;
            position: absolute;
            box-shadow: var(--awb-box-shadow);
            top: 100%;
            width: max-content
        }

        .awb-menu_dropdown.awb-menu_row .awb-menu__sub-ul_main {
            margin-top: var(--awb-submenu-space)
        }

        .ltr .awb-menu__sub-ul {
            left: 0
        }

        .awb-menu__sub-li {
            width: var(--awb-submenu-max-width);
            border-bottom: 1px solid var(--awb-submenu-sep-color);
            background-color: var(--awb-submenu-bg);
            position: relative
        }

        .awb-menu__sub-li:first-child {
            border-top-left-radius: var(--awb-submenu-border-radius-top-left);
            border-top-right-radius: var(--awb-submenu-border-radius-top-right)
        }

        .awb-menu__sub-li:last-child {
            border-bottom-width: 0;
            border-bottom-left-radius: var(--awb-submenu-border-radius-bottom-left);
            border-bottom-right-radius: var(--awb-submenu-border-radius-bottom-right)
        }

        .awb-menu__sub-a {
            display: flex;
            justify-content: var(--awb-sub-justify-content);
            align-items: center;
            color: var(--awb-submenu-color) !important;
            padding-top: var(--awb-submenu-items-padding-top);
            padding-bottom: var(--awb-submenu-items-padding-bottom);
            padding-left: var(--awb-submenu-items-padding-left);
            padding-right: var(--awb-submenu-items-padding-right);
            font-family: var(--awb-fusion-font-family-submenu-typography);
            font-weight: var(--awb-fusion-font-weight-submenu-typography);
            font-style: var(--awb-fusion-font-style-submenu-typography);
            width: 100%;
            font-size: var(--awb-submenu-font-size);
            text-transform: var(--awb-submenu-text-transform);
            line-height: var(--awb-submenu-line-height);
            letter-spacing: var(--awb-submenu-letter-spacing)
        }

        .awb-menu_transition-slide_up.awb-menu_desktop.awb-menu_em-hover.awb-menu_row .awb-menu__sub-ul {
            transform: translateY(20px)
        }

        .awb-menu_row .menu-text {
            display: flex;
            align-items: center;
            text-align: center
        }

        .awb-menu_icons-left .awb-menu__main-a {
            flex-direction: row
        }

        .awb-menu {
            --awb-arrows-size-height: 12px;
            --awb-arrows-size-width: 23px
        }

        .awb-menu {
            --awb-main-justify-content: flex-start
        }

        .awb-menu_v-stacked .menu-item-has-children .awb-menu__sub-a {
            grid-area: link
        }

        .awb-menu_v-stacked .menu-item-has-children .awb-menu__open-nav-submenu_click {
            grid-area: caret
        }

        .awb-menu_v-stacked .menu-item-has-children .awb-menu__sub-ul {
            grid-area: submenu
        }

        .awb-menu {
            --awb-mobile-text-transform: none;
            --awb-mobile-trigger-background-color: #fff;
            --awb-mobile-trigger-color: #4a4e57;
            --awb-trigger-padding-top: 12px;
            --awb-trigger-padding-right: 20px;
            --awb-trigger-padding-bottom: 12px;
            --awb-trigger-padding-left: 20px;
            --awb-mobile-trigger-font-size: 1em;
            --awb-mobile-nav-button-align-hor: flex-start;
            --awb-fusion-font-family-mobile-typography: inherit;
            --awb-fusion-font-style-mobile-typography: inherit;
            --awb-fusion-font-weight-mobile-typography: 400;
            --awb-mobile-nav-trigger-bottom-margin: 0;
            --awb-mobile-bg: #fff;
            --awb-mobile-nav-items-height: 65;
            --awb-mobile-color: #4a4e57;
            --awb-mobile-justify: flex-start;
            --awb-mobile-line-height: inherit;
            --awb-mobile-letter-spacing: inherit;
            --awb-mobile-active-bg: #f9f9fb;
            --awb-mobile-active-color: #4a4e57;
            --awb-mobile-caret-left: auto;
            --awb-mobile-caret-right: 0;
            --awb-mobile-sep-color: rgba(0, 0, 0, .1);
            --awb-mobile-sticky-max-height: 340px
        }

        .awb-menu__m-toggle {
            background-color: var(--awb-mobile-trigger-background-color);
            color: var(--awb-mobile-trigger-color);
            padding-top: var(--awb-trigger-padding-top);
            padding-right: var(--awb-trigger-padding-right);
            padding-bottom: var(--awb-trigger-padding-bottom);
            padding-left: var(--awb-trigger-padding-left);
            box-sizing: content-box;
            font-family: var(--awb-fusion-font-family-typography);
            font-style: var(--awb-fusion-font-style-typography);
            font-weight: var(--awb-fusion-font-weight-typography);
            font-size: var(--awb-mobile-trigger-font-size);
            border: none !important;
            box-shadow: none !important;
            display: none
        }

        .awb-menu__m-toggle-inner {
            display: flex;
            justify-content: flex-start;
            align-items: center
        }

        .awb-menu__m-collapse-icon {
            position: relative;
            width: 1em;
            height: 1em;
            margin-inline-start: .5em
        }

        .awb-menu__m-collapse-icon-close,
        .awb-menu__m-collapse-icon-open {
            width: 1em;
            position: absolute;
            left: 0;
            opacity: 0;
            transform: rotate(0)
        }

        .awb-menu__m-collapse-icon-open {
            opacity: 1
        }

        .awb-menu__m-collapse-icon-close_no-text,
        .awb-menu__m-collapse-icon-open_no-text {
            left: 0
        }

        .awb-menu__m-collapse-icon_no-text {
            margin-left: 0;
            margin-right: 0
        }

        .awb-menu {
            --awb-flyout-active-close-color: #212934;
            --awb-flyout-close-color: #212934
        }

        .awb-menu.awb-menu_desktop .fusion-megamenu-wrapper {
            position: absolute;
            top: 100%;
            box-shadow: var(--awb-box-shadow, none);
            padding-left: 15px;
            padding-right: 15px
        }

        .ltr .awb-menu.awb-menu_desktop .fusion-megamenu-wrapper {
            left: 0
        }

        .awb-menu_transition-slide_up.awb-menu_desktop.awb-menu_em-hover.awb-menu_row .fusion-megamenu-wrapper {
            transform: translateY(20px)
        }

        .awb-menu_desktop:not(.awb-menu_flyout) .fusion-megamenu-wrapper {
            opacity: 0;
            z-index: -10;
            margin-top: var(--awb-submenu-space, 0)
        }

        .awb-menu.awb-menu_desktop .fusion-megamenu-wrapper {
            border-top-left-radius: var(--awb-submenu-border-radius-top-left, 0);
            border-top-right-radius: var(--awb-submenu-border-radius-top-right, 0);
            border-bottom-left-radius: var(--awb-submenu-border-radius-bottom-left, 0);
            border-bottom-right-radius: var(--awb-submenu-border-radius-bottom-right, 0);
            overflow: auto
        }

        .awb-menu.awb-menu_desktop .fusion-megamenu-wrapper .fusion-megamenu-holder {
            background-color: var(--awb-submenu-bg, #fff)
        }

        .awb-menu.awb-menu_desktop .fusion-megamenu-wrapper .fusion-megamenu-holder .fusion-megamenu {
            position: relative
        }

        .awb-menu.awb-menu_desktop .fusion-megamenu-wrapper .fusion-megamenu-holder .fusion-megamenu .fusion-megamenu-submenu {
            font-size: var(--awb-submenu-font-size, 14px);
            font-family: var(--awb-fusion-font-family-submenu-typography, inherit);
            font-style: var(--awb-fusion-font-style-submenu-typography, inherit);
            font-weight: var(--awb-fusion-font-weight-submenu-typography, 400);
            text-transform: var(--awb-submenu-text-transform, none);
            padding-top: var(--megamenu_item_vertical_padding);
            padding-bottom: var(--megamenu_item_vertical_padding)
        }

        .awb-menu.awb-menu_desktop .fusion-megamenu-wrapper .fusion-megamenu-holder .fusion-megamenu .fusion-megamenu-submenu .fusion-megamenu-widgets-container .widget_text {
            color: var(--awb-submenu-color, #212934)
        }

        .awb-menu.awb-menu_desktop .fusion-megamenu-wrapper .fusion-megamenu-holder .fusion-megamenu .fusion-megamenu-submenu .fusion-megamenu-widgets-container .widget_text .textwidget {
            color: inherit
        }

        .awb-menu.awb-menu_desktop .fusion-megamenu-wrapper .fusion-megamenu {
            display: flex;
            flex-wrap: wrap;
            padding: 0;
            width: 100%;
            max-width: 100vw;
            z-index: 10
        }

        .awb-menu.awb-menu_desktop .fusion-megamenu-wrapper .fusion-megamenu>li:last-child {
            border: none
        }

        .awb-menu.awb-menu_desktop .fusion-megamenu-wrapper .fusion-megamenu-submenu {
            display: block;
            float: none;
            padding: 29px 0;
            border-right: 1px solid transparent;
            background-size: cover
        }

        .awb-menu.awb-menu_desktop .fusion-megamenu-wrapper .fusion-megamenu-widgets-container {
            display: block;
            padding: 0 34px;
            margin-bottom: 10px
        }

        .awb-menu.awb-menu_desktop .fusion-megamenu-wrapper .fusion-megamenu-widgets-container .textwidget a:not(.fb-icon-element) {
            display: inline
        }

        .awb-menu.awb-menu_desktop .fusion-megamenu-wrapper ul,
        .awb-menu.awb-menu_desktop .fusion-megamenu-wrapper ul li {
            border-radius: 0 !important
        }

        .awb-menu.awb-menu_desktop .fusion-megamenu-wrapper.fusion-megamenu-fullwidth:not(.fusion-megamenu-width-site-width) {
            border-radius: 0 !important
        }

        .awb-menu_desktop.awb-menu_row .fusion-megamenu-wrapper {
            margin-left: -10px;
            max-width: 100vw
        }

        .awb-menu.mega-menu-loading .fusion-megamenu-wrapper {
            display: none !important;
            opacity: 0 !important
        }

        .fusion-text {
            --awb-content-alignment: initial;
            --awb-font-size: inherit;
            --awb-line-height: inherit;
            --awb-letter-spacing: inherit;
            --awb-text-transform: inherit;
            --awb-text-color: inherit;
            --awb-text-font-family: inherit;
            --awb-text-font-style: inherit;
            --awb-text-font-weight: inherit;
            --awb-columns: var(--text_columns, auto);
            --awb-column-spacing: var(--text_column_spacing, normal);
            --awb-column-min-width: var(--text_column_min_width, auto);
            --awb-rule-style: var(--text_rule_style, initial);
            --awb-margin-top: 0;
            --awb-margin-right: 0;
            --awb-margin-bottom: 0;
            --awb-margin-left: 0;
            text-align: var(--awb-content-alignment);
            font-size: var(--awb-font-size);
            line-height: var(--awb-line-height);
            letter-spacing: var(--awb-letter-spacing);
            text-transform: var(--awb-text-transform);
            color: var(--awb-text-color);
            font-family: var(--awb-text-font-family);
            font-weight: var(--awb-text-font-weight);
            font-style: var(--awb-text-font-style);
            margin: var(--awb-margin-top) var(--awb-margin-right) var(--awb-margin-bottom) var(--awb-margin-left)
        }

        .fusion-body .fusion-title {
            --awb-highlight-color: var(--primary_color, #65bc7b);
            --awb-highlight-top-margin: 0;
            --awb-highlight-width: 9;
            --awb-text-color: var(--body_typography-color);
            --awb-margin-top: var(--title_margin-top);
            --awb-margin-right: var(--title_margin-right);
            --awb-margin-bottom: var(--title_margin-bottom);
            --awb-margin-left: var(--title_margin-left);
            --awb-link-color: var(--link_color);
            --awb-link-hover-color: var(--link_hover_color);
            --awb-sep-color: var(--title_border_color);
            --awb-font-size: var(--body_typography-font-size);
            margin-top: var(--awb-margin-top);
            margin-right: var(--awb-margin-right);
            margin-bottom: var(--awb-margin-bottom);
            margin-left: var(--awb-margin-left);
            display: flex;
            flex-wrap: nowrap;
            align-items: center;
            border-bottom-color: var(--awb-sep-color);
            font-size: var(--awb-font-size)
        }

        .fusion-body .fusion-title.fusion-title-size-one {
            --awb-font-size: var(--h1_typography-font-size);
            --awb-text-color: var(--h1_typography-color)
        }

        .fusion-body .fusion-title.fusion-title-size-two {
            --awb-font-size: var(--h2_typography-font-size);
            --awb-text-color: var(--h2_typography-color)
        }

        .fusion-body .fusion-title h1>p:last-of-type {
            margin-bottom: 0
        }

        .fusion-body .fusion-title h2.title-heading-left {
            text-align: left
        }

        .fusion-body .fusion-title.fusion-title-center {
            text-align: center
        }

        .fusion-body .fusion-title.fusion-title-center.fusion-sep-none .title-heading-center {
            padding: 0;
            text-align: center
        }

        .fusion-body .fusion-title.fusion-sep-none {
            display: block
        }

        .fusion-body .fusion-title.fusion-sep-none .title-heading-left {
            padding: 0;
            text-align: left
        }

        .fusion-body #wrapper .fusion-title h1,
        .fusion-body #wrapper .fusion-title h2 {
            flex-grow: 0;
            padding: 0;
            font-size: 1em;
            color: var(--awb-text-color)
        }

        .fusion-accordian {
            --awb-margin-top: 0;
            --awb-margin-bottom: 0;
            --awb-padding-top: 0;
            --awb-padding-right: 0;
            --awb-padding-bottom: 0;
            --awb-padding-left: 0;
            --awb-border-size: 1px;
            --awb-icon-size: 13px;
            --awb-title-color: var(--link_color, var(--h4_typography-color));
            --awb-title-font-weight: 400;
            --awb-title-font-style: normal;
            --awb-title-line-height: 22px;
            --awb-title-font-size: 16px;
            --awb-title-letter-spacing: var(--h4_typography-letter-spacing);
            --awb-title-text-transform: var(--h4_typography-text-transform);
            --awb-content-color: var(--body_typography-color);
            --awb-content-font-size: var(--body_typography-font-size);
            --awb-content-line-height: var(--body_typography-line-height);
            --awb-content-letter-spacing: var(--body_typography-letter-spacing);
            --awb-content-text-transform: none;
            --awb-content-font-family: inherit;
            --awb-content-font-weight: 400;
            --awb-content-font-style: var(--body_typography-font-style, normal);
            --awb-icon-box-color: var(--accordian_inactive_color, #333);
            --awb-toggle-hover-accent-color: var(--primary_color);
            width: 100%;
            margin-top: var(--awb-margin-top);
            margin-bottom: var(--awb-margin-bottom)
        }

        .fusion-accordian .fusion-panel {
            box-shadow: none;
            border: none;
            border-bottom: 1px solid var(--accordion_divider_color);
            border-radius: 0;
            background-clip: padding-box;
            padding: var(--awb-padding-top) var(--awb-padding-right) var(--awb-padding-bottom) var(--awb-padding-left)
        }

        .fusion-accordian .panel-heading {
            padding: 0;
            background: 0 0
        }

        .fusion-accordian .panel-heading .panel-title {
            margin: 0
        }

        .fusion-accordian .panel-heading .panel-title a {
            display: flex;
            align-items: baseline;
            color: var(--awb-title-color)
        }

        .fusion-accordian .panel-heading .panel-title a:not(.active) .fusion-toggle-icon-wrapper .active-icon {
            display: none
        }

        .fusion-body .fusion-accordian .panel-title {
            font-family: var(--awb-title-font-family);
            font-weight: var(--awb-title-font-weight);
            font-style: var(--awb-title-font-style);
            line-height: var(--awb-title-line-height);
            font-size: var(--awb-title-font-size);
            letter-spacing: var(--awb-title-letter-spacing);
            text-transform: var(--awb-title-text-transform)
        }

        .fusion-accordian .panel-title {
            position: relative;
            color: inherit
        }

        .fusion-accordian .panel-title a {
            display: block;
            padding: 10px 0;
            text-decoration: none;
            box-shadow: none !important
        }

        .fusion-accordian .panel-title a .fa-fusion-box {
            display: inline-block;
            vertical-align: middle;
            background-color: var(--awb-icon-box-color) !important;
            border-color: var(--awb-icon-box-color) !important;
            color: var(--awb-icon-color);
            text-align: center;
            padding: 4.5px;
            -webkit-font-smoothing: subpixel-antialiased
        }

        .fusion-accordian .panel-title a .fa-fusion-box:before {
            font-style: normal;
            line-height: normal;
            font-size: var(--awb-icon-size);
            width: var(--awb-icon-size);
            display: grid
        }

        .fusion-accordian .panel-title .fusion-toggle-heading {
            margin-left: 18px
        }

        .fusion-accordian .panel-body {
            padding: 10px 0 15px;
            border: none;
            line-height: var(--body_typography-line-height)
        }

        .fusion-accordian .toggle-content {
            color: var(--awb-content-color);
            font-family: var(--awb-content-font-family);
            font-weight: var(--awb-content-font-weight);
            font-style: var(--awb-content-font-style);
            font-size: var(--awb-content-font-size);
            text-transform: var(--awb-content-text-transform);
            line-height: var(--awb-content-line-height);
            letter-spacing: var(--awb-content-letter-spacing)
        }

        .fusion-accordian .fusion-panel.fusion-toggle-has-divider {
            border-color: var(--awb-divider-color)
        }

        .fusion-faq-shortcode .fusion-accordian {
            --awb-title-font-family: var(--faq_accordion_title_typography-font-family);
            --awb-title-font-weight: var(--faq_accordion_title_typography-font-weight);
            --awb-title-font-style: var(--faq_accordion_title_typography-font-style);
            --awb-title-line-height: var(--faq_accordion_title_typography-line-height);
            --awb-title-font-size: var(--faq_accordion_title_typography-font-size);
            --awb-title-letter-spacing: var(--faq_accordion_title_typography-letter-spacing);
            --awb-title-text-transform: var(--faq_accordion_title_typography-text-transform);
            --awb-title-color: var(--faq_accordion_title_typography-color);
            --awb-icon-size: 16px;
            --awb-icon-color: var(--faq_accordian_icon_color);
            --awb-icon-box-color: var(--faq_accordian_inactive_color)
        }

        .fusion-faq-shortcode .fusion-accordian .fusion-panel {
            border-bottom: 1px solid var(--faq_accordion_divider_color)
        }

        .fusion-tb-header {
            background-color: var(--awb_header_bg_color, transparent)
        }

        .clearfix,
        .row {
            clear: both
        }

        .clearfix,
        .fusion-clearfix,
        .row {
            clear: both
        }

        .clearfix:after,
        .clearfix:before,
        .fusion-clearfix:after,
        .fusion-clearfix:before,
        .row:after,
        .row:before {
            content: " ";
            display: table
        }

        .clearfix:after,
        .fusion-clearfix:after,
        .row:after {
            clear: both
        }

        .fusion-builder-row {
            width: 100%;
            margin: 0 auto
        }

        .fusion-builder-row:after {
            clear: both;
            content: " ";
            display: table
        }

        .row:after {
            clear: both;
            content: " ";
            display: table
        }

        .fusion-fullwidth {
            position: relative
        }

        .fusion-fullwidth .fusion-row {
            position: relative;
            z-index: 10
        }

        .row {
            margin-left: -15px;
            margin-right: -15px
        }

        .col-lg-3,
        .col-md-3,
        .col-sm-3 {
            position: relative;
            min-height: 1px;
            padding-left: 15px;
            padding-right: 15px
        }

        @media (min-width:0px) {
            .col-sm-3 {
                float: left
            }

            .col-sm-3 {
                width: 25%
            }
        }

        @media (min-width:992px) {
            .col-md-3 {
                float: left
            }

            .col-md-3 {
                width: 25%
            }
        }

        @media (min-width:1200px) {
            .col-lg-3 {
                float: left
            }

            .col-lg-3 {
                width: 25%
            }
        }

        .fusion-fullwidth {
            --awb-background-color: var(--full_width_bg_color);
            --awb-background-image: none;
            --awb-background-position: center center;
            --awb-background-size: auto;
            --awb-background-repeat: no-repeat;
            --awb-background-blend-mode: none;
            --awb-background-size: initial;
            --awb-box-shadow: none;
            --awb-border-sizes-top: var(--full_width_border_sizes_top);
            --awb-border-sizes-right: var(--full_width_border_sizes_right);
            --awb-border-sizes-bottom: var(--full_width_border_sizes_bottom);
            --awb-border-sizes-left: var(--full_width_border_sizes_left);
            --awb-border-color: var(--full_width_border_color);
            --awb-border-style: solid;
            --awb-border-radius-top-left: 0;
            --awb-border-radius-top-right: 0;
            --awb-border-radius-bottom-left: 0;
            --awb-border-radius-bottom-right: 0;
            --awb-padding-top: var(--container_padding_default_top, 0px);
            --awb-padding-right: var(--container_padding_default_right, 0px);
            --awb-padding-bottom: var(--container_padding_default_bottom, 0px);
            --awb-padding-left: var(--container_padding_default_left, 0px);
            --awb-margin-top: 0;
            --awb-margin-bottom: 0;
            --awb-min-height: 0;
            --awb-overflow: visible;
            --awb-z-index: auto;
            --awb-sticky-background-color: var(--awb-background-color);
            --awb-sticky-height: var(--awb-min-height);
            --awb-filter: none;
            --awb-filter-hover: none;
            background-color: var(--awb-background-color);
            background-image: var(--awb-background-image);
            background-position: var(--awb-background-position);
            background-repeat: var(--awb-background-repeat);
            background-blend-mode: var(--awb-background-blend-mode);
            background-size: var(--awb-background-size);
            box-shadow: var(--awb-box-shadow);
            border-width: var(--awb-border-sizes-top) var(--awb-border-sizes-right) var(--awb-border-sizes-bottom) var(--awb-border-sizes-left);
            border-color: var(--awb-border-color);
            border-style: var(--awb-border-style);
            border-radius: var(--awb-border-radius-top-left) var(--awb-border-radius-top-right) var(--awb-border-radius-bottom-right) var(--awb-border-radius-bottom-left);
            padding: var(--awb-padding-top) var(--awb-padding-right) var(--awb-padding-bottom) var(--awb-padding-left);
            margin-top: var(--awb-margin-top);
            margin-bottom: var(--awb-margin-bottom);
            min-height: var(--awb-min-height);
            overflow: var(--awb-overflow);
            z-index: var(--awb-z-index);
            filter: var(--awb-filter)
        }

        .fusion-tb-header .fusion-fullwidth,
        .width-100 .fusion-fullwidth {
            --awb-padding-top: var(--container_padding_100_top, 0px);
            --awb-padding-right: var(--container_padding_100_right, var(--hundredp_padding));
            --awb-padding-bottom: var(--container_padding_100_bottom, 0px);
            --awb-padding-left: var(--container_padding_100_left, var(--hundredp_padding))
        }

        .fusion-fullwidth.fusion-animated {
            --awb-z-index: 2000
        }

        #wrapper #main .fullwidth-box .fusion-row {
            padding-left: 0;
            padding-right: 0
        }

        .post-content:not(.fusion-post-content),
        body:not(.side-header) #wrapper {
            position: relative
        }

        .fusion-flex-container {
            display: flex;
            justify-content: center
        }

        .fusion-flex-container .fusion-row {
            display: flex;
            flex-wrap: wrap;
            flex: 1;
            width: 100%
        }

        .fusion-flex-container .fusion-row:after,
        .fusion-flex-container .fusion-row:before {
            content: none
        }

        .fusion-flex-container .fusion-row .fusion-flex-column {
            display: flex
        }

        .fusion-flex-container .fusion-row .fusion-flex-column .fusion-column-wrapper {
            width: 100%
        }

        .fusion-flex-container .fusion-row .fusion-flex-column .fusion-column-wrapper:not(.fusion-flex-column-wrapper-legacy) {
            display: flex
        }

        .fusion-flex-container .fusion-row .fusion-flex-column .fusion-column-wrapper:not(.fusion-flex-column-wrapper-legacy).fusion-content-layout-column {
            flex-direction: column
        }

        .fusion-flex-container .fusion-flex-align-items-flex-start {
            align-items: flex-start
        }

        .fusion-flex-container .fusion-flex-align-items-center {
            align-items: center
        }

        .fusion-flex-container .fusion-flex-justify-content-flex-start {
            justify-content: flex-start
        }

        .fusion-flex-container .fusion-flex-justify-content-center {
            justify-content: center
        }

        .fusion-flex-container .fusion-flex-justify-content-space-between {
            justify-content: space-between
        }

        .fusion-sticky-container:not(.fusion-sticky-spacer) {
            -webkit-backface-visibility: hidden
        }

        .fusion-sticky-container:not(.fusion-sticky-spacer):not(.fusion-custom-z-index) {
            --awb-z-index: 10010
        }

        .fusion-tb-header .fusion-sticky-container:not(.fusion-sticky-spacer):not(.fusion-custom-z-index) {
            --awb-z-index: 10011
        }

        .fusion_builder_column {
            --awb-z-index: auto;
            --awb-z-index-hover: var(--awb-z-index);
            --awb-absolute-top: auto;
            --awb-absolute-right: auto;
            --awb-absolute-bottom: auto;
            --awb-absolute-left: auto;
            --awb-container-position: relative;
            --awb-overflow: visible;
            --awb-inner-bg-overflow: visible;
            --awb-bg-color: transparent;
            --awb-bg-color-hover: var(--awb-bg-color);
            --awb-inner-bg-color: transparent;
            --awb-bg-position: left top;
            --awb-inner-bg-position: left top;
            --awb-bg-image: none;
            --awb-inner-bg-image: none;
            --awb-bg-blend: none;
            --awb-inner-bg-blend: none;
            --awb-bg-repeat: no-repeat;
            --awb-inner-bg-repeat: no-repeat;
            --awb-bg-size: auto auto;
            --awb-inner-bg-size: auto auto;
            --awb-border-top: 0;
            --awb-border-right: 0;
            --awb-border-bottom: 0;
            --awb-border-left: 0;
            --awb-border-color: initial;
            --awb-border-color-hover: var(--awb-border-color);
            --awb-border-style: solid;
            --awb-inner-border-top: 0;
            --awb-inner-border-right: 0;
            --awb-inner-border-bottom: 0;
            --awb-inner-border-left: 0;
            --awb-inner-border-color: initial;
            --awb-inner-border-color-hover: var(--awb-inner-border-color);
            --awb-inner-border-style: solid;
            --awb-border-radius: 0;
            --awb-inner-bg-border-radius: 0;
            --awb-liftup-border-radius: 0;
            --awb-box-shadow: none;
            --awb-inner-bg-box-shadow: none;
            --awb-padding-top: 0;
            --awb-padding-right: 0;
            --awb-padding-bottom: 0;
            --awb-padding-left: 0;
            --awb-transform: none;
            --awb-transform-hover: var(--awb-transform);
            --awb-transform-parent-hover: var(--awb-transform);
            --awb-transform-origin: 50% 50%;
            --awb-filter: none;
            --awb-filter-hover: var(--awb-filter);
            --awb-filter-parent-hover: var(--awb-filter);
            --awb-col-width: var(--awb-width-large, 33.3333%);
            --awb-col-order: var(--awb-order-large, 0);
            --awb-margin-top-large: var(--col_margin-top, 0);
            --awb-margin-bottom-large: var(--col_margin-bottom, 20px);
            --awb-spacing-left-large: var(--col_spacing, 4%);
            --awb-spacing-right-large: var(--col_spacing, 4%);
            --awb-margin-top: var(--awb-margin-top-large);
            --awb-margin-bottom: var(--awb-margin-bottom-large);
            --awb-spacing-left: var(--awb-spacing-left-large);
            --awb-spacing-right: var(--awb-spacing-right-large)
        }

        .fusion-layout-column {
            position: var(--awb-container-position);
            float: left;
            margin-top: var(--awb-margin-top);
            margin-bottom: var(--awb-margin-bottom);
            z-index: var(--awb-z-index);
            top: var(--awb-absolute-top);
            right: var(--awb-absolute-right);
            bottom: var(--awb-absolute-bottom);
            left: var(--awb-absolute-left);
            filter: var(--awb-filter);
            width: var(--awb-col-width);
            order: var(--awb-col-order)
        }

        .fusion-layout-column .fusion-column-wrapper {
            background-image: var(--awb-bg-image);
            background-color: var(--awb-bg-color);
            background-position: var(--awb-bg-position);
            background-blend-mode: var(--awb-bg-blend);
            background-repeat: var(--awb-bg-repeat);
            background-size: var(--awb-bg-size);
            border-width: var(--awb-border-top) var(--awb-border-right) var(--awb-border-bottom) var(--awb-border-left);
            border-color: var(--awb-border-color);
            border-style: var(--awb-border-style);
            border-radius: var(--awb-border-radius);
            box-shadow: var(--awb-box-shadow);
            padding: var(--awb-padding-top) var(--awb-padding-right) var(--awb-padding-bottom) var(--awb-padding-left);
            overflow: var(--awb-overflow);
            transform: var(--awb-transform);
            transform-origin: var(--awb-transform-origin);
            min-height: 1px;
            min-width: 0;
            margin-left: var(--awb-spacing-left);
            margin-right: var(--awb-spacing-right)
        }

        .fusion-animated {
            visibility: hidden
        }

        @media only screen and (max-width:1024px) {
            .fusion-fullwidth {
                --awb-padding-top-medium: var(--awb-padding-top);
                --awb-padding-right-medium: var(--awb-padding-right);
                --awb-padding-bottom-medium: var(--awb-padding-bottom);
                --awb-padding-left-medium: var(--awb-padding-left);
                --awb-margin-top-medium: var(--awb-margin-top);
                --awb-margin-bottom-medium: var(--awb-margin-bottom);
                --awb-min-height-medium: var(--awb-min-height);
                --awb-sticky-height-medium: var(--awb-min-height-medium);
                --awb-background-image-medium: var(--awb-background-image);
                --awb-background-color-medium: var(--awb-background-color);
                --awb-background-position-medium: var(--awb-background-position);
                --awb-background-repeat-medium: var(--awb-background-repeat);
                --awb-background-size-medium: var(--awb-background-size);
                --awb-background-blend-mode-medium: var(--awb-background-blend-mode);
                padding: var(--awb-padding-top-medium) var(--awb-padding-right-medium) var(--awb-padding-bottom-medium) var(--awb-padding-left-medium);
                margin-top: var(--awb-margin-top-medium);
                margin-bottom: var(--awb-margin-bottom-medium);
                min-height: var(--awb-min-height-medium);
                background-image: var(--awb-background-image-medium);
                background-color: var(--awb-background-color-medium);
                background-repeat: var(--awb-background-repeat-medium);
                background-position: var(--awb-background-position-medium);
                background-size: var(--awb-background-size-medium);
                background-blend-mode: var(--awb-background-blend-mode-medium)
            }
        }

        @media only screen and (max-width:640px) {
            .fusion-fullwidth {
                --awb-padding-top-small: var(--awb-padding-top-medium);
                --awb-padding-right-small: var(--awb-padding-right-medium);
                --awb-padding-bottom-small: var(--awb-padding-bottom-medium);
                --awb-padding-left-small: var(--awb-padding-left-medium);
                --awb-margin-top-small: var(--awb-margin-top-medium);
                --awb-margin-bottom-small: var(--awb-margin-bottom-medium);
                --awb-min-height-small: var(--awb-min-height-medium);
                --awb-sticky-height-small: var(--awb-min-height-small);
                --awb-background-image-small: var(--awb-background-image-medium);
                --awb-background-color-small: var(--awb-background-color-medium);
                --awb-background-repeat-small: var(--awb-background-repeat-medium);
                --awb-background-position-small: var(--awb-background-position-medium);
                --awb-background-size-small: var(--awb-background-size-medium);
                --awb-background-blend-mode-small: var(--awb-background-blend-mode-medium);
                padding: var(--awb-padding-top-small) var(--awb-padding-right-small) var(--awb-padding-bottom-small) var(--awb-padding-left-small);
                margin-top: var(--awb-margin-top-small);
                margin-bottom: var(--awb-margin-bottom-small);
                min-height: var(--awb-min-height-small);
                background-image: var(--awb-background-image-small);
                background-color: var(--awb-background-color-small);
                background-repeat: var(--awb-background-repeat-small);
                background-position: var(--awb-background-position-small);
                background-size: var(--awb-background-size-small);
                background-blend-mode: var(--awb-background-blend-mode-small)
            }
        }

        @media only screen and (max-width:1024px) {
            .fusion-image-element {
                --awb-margin-top-medium: var(--awb-margin-top);
                --awb-margin-right-medium: var(--awb-margin-right);
                --awb-margin-bottom-medium: var(--awb-margin-bottom);
                --awb-margin-left-medium: var(--awb-margin-left);
                margin-top: var(--awb-margin-top-medium);
                margin-right: var(--awb-margin-right-medium);
                margin-bottom: var(--awb-margin-bottom-medium);
                margin-left: var(--awb-margin-left-medium)
            }
        }

        @media only screen and (max-width:640px) {
            .fusion-image-element {
                --awb-margin-top-small: var(--awb-margin-top-medium);
                --awb-margin-right-small: var(--awb-margin-right-medium);
                --awb-margin-bottom-small: var(--awb-margin-bottom-medium);
                --awb-margin-left-small: var(--awb-margin-left-medium);
                margin-top: var(--awb-margin-top-small);
                margin-right: var(--awb-margin-right-small);
                margin-bottom: var(--awb-margin-bottom-small);
                margin-left: var(--awb-margin-left-small)
            }

            .fusion-image-element .fusion-imageframe.has-fusion-mobile-logo img.fusion-standard-logo {
                display: none !important
            }

            .fusion-image-element .fusion-imageframe.has-fusion-mobile-logo img.fusion-mobile-logo {
                display: inline-block !important
            }
        }

        @media only screen and (max-width:1024px) {
            .fusion-title {
                --awb-margin-top-medium: var(--awb-margin-top);
                --awb-margin-right-medium: var(--awb-margin-right);
                --awb-margin-bottom-medium: var(--awb-margin-bottom);
                --awb-margin-left-medium: var(--awb-margin-left);
                margin-top: var(--awb-margin-top-medium) !important;
                margin-right: var(--awb-margin-right-medium) !important;
                margin-bottom: var(--awb-margin-bottom-medium) !important;
                margin-left: var(--awb-margin-left-medium) !important
            }
        }

        @media only screen and (max-width:640px) {
            .fusion-title {
                --awb-margin-top-small: var(--title_margin_mobile-top, var(--awb-margin-top-medium));
                --awb-margin-right-small: var(--title_margin_mobile-right, var(--awb-margin-right-medium));
                --awb-margin-bottom-small: var(--title_margin_mobile-bottom, var(--awb-margin-bottom-medium));
                --awb-margin-left-small: var(--title_margin_mobile-left, var(--awb-margin-left-medium));
                margin-top: var(--awb-margin-top-small) !important;
                margin-right: var(--awb-margin-right-small) !important;
                margin-bottom: var(--awb-margin-bottom-small) !important;
                margin-left: var(--awb-margin-left-small) !important
            }
        }

        @media only screen and (max-width:1024px) {
            .fusion_builder_column {
                --awb-padding-top-medium: var(--awb-padding-top);
                --awb-padding-right-medium: var(--awb-padding-right);
                --awb-padding-bottom-medium: var(--awb-padding-bottom);
                --awb-padding-left-medium: var(--awb-padding-left);
                --awb-col-width: var(--awb-width-medium, var(--medium-col-default));
                --awb-col-order: var(--awb-order-medium, var(--awb-order-large));
                --awb-margin-top-medium: var(--awb-margin-top-large, var(--col_margin-top, 0));
                --awb-margin-bottom-medium: var(--awb-margin-bottom-large, var(--col_margin-bottom, 20px));
                --awb-spacing-left-medium: var(--awb-spacing-left-large, 4%);
                --awb-spacing-right-medium: var(--awb-spacing-right-large, 4%);
                --awb-margin-top: var(--awb-margin-top-medium);
                --awb-margin-bottom: var(--awb-margin-bottom-medium);
                --awb-spacing-left: var(--awb-spacing-left-medium);
                --awb-spacing-right: var(--awb-spacing-right-medium);
                --awb-bg-image-medium: var(--awb-bg-image);
                --awb-bg-color-medium: var(--awb-bg-color);
                --awb-bg-repeat-medium: var(--awb-bg-repeat);
                --awb-bg-position-medium: var(--awb-bg-position);
                --awb-bg-size-medium: var(--awb-bg-size);
                --awb-bg-blend-medium: var(--awb-bg-blend)
            }

            .fusion_builder_column .fusion-column-wrapper {
                padding: var(--awb-padding-top-medium) var(--awb-padding-right-medium) var(--awb-padding-bottom-medium) var(--awb-padding-left-medium);
                background-image: var(--awb-bg-image-medium);
                background-color: var(--awb-bg-color-medium);
                background-repeat: var(--awb-bg-repeat-medium);
                background-position: var(--awb-bg-position-medium);
                background-size: var(--awb-bg-size-medium);
                background-blend-mode: var(--awb-bg-blend-medium)
            }
        }

        @media only screen and (max-width:640px) {
            .fusion_builder_column {
                --awb-padding-top-small: var(--awb-padding-top-medium);
                --awb-padding-right-small: var(--awb-padding-right-medium);
                --awb-padding-bottom-small: var(--awb-padding-bottom-medium);
                --awb-padding-left-small: var(--awb-padding-left-medium);
                --awb-col-width: var(--awb-width-small, var(--small-col-default));
                --awb-col-order: var(--awb-order-small, var(--awb-order-medium));
                --awb-spacing-left-small: var(--awb-spacing-left-large, 4%);
                --awb-spacing-right-small: var(--awb-spacing-right-large, 4%);
                --awb-margin-top-small: var(--awb-margin-top-medium, var(--awb-margin-top-large, var(--col_margin-top, 0)));
                --awb-margin-bottom-small: var(--awb-margin-bottom-medium, var(--awb-margin-bottom-large, var(--col_margin-bottom, 20px)));
                --awb-spacing-left: var(--awb-spacing-left-small);
                --awb-spacing-right: var(--awb-spacing-right-small);
                --awb-margin-top: var(--awb-margin-top-small);
                --awb-margin-bottom: var(--awb-margin-bottom-small);
                --awb-bg-image-small: var(--awb-bg-image-medium);
                --awb-bg-color-small: var(--awb-bg-color-medium);
                --awb-bg-repeat-small: var(--awb-bg-repeat-medium);
                --awb-bg-position-small: var(--awb-bg-position-medium);
                --awb-bg-size-small: var(--awb-bg-size-medium);
                --awb-bg-blend-small: var(--awb-bg-blend-medium)
            }

            .fusion_builder_column .fusion-column-wrapper {
                padding: var(--awb-padding-top-small) var(--awb-padding-right-small) var(--awb-padding-bottom-small) var(--awb-padding-left-small);
                background-image: var(--awb-bg-image-small);
                background-color: var(--awb-bg-color-small);
                background-repeat: var(--awb-bg-repeat-small);
                background-position: var(--awb-bg-position-small);
                background-size: var(--awb-bg-size-small);
                background-blend-mode: var(--awb-bg-blend-small)
            }
        }

        @media only screen and (max-width:800px) {
            .fusion-layout-column {
                margin-left: 0 !important;
                margin-right: 0 !important
            }

            .col-sm-3 {
                float: none;
                width: 100%
            }

            #wrapper {
                width: auto !important
            }

            #content.full-width {
                margin-bottom: 0
            }

            .fullwidth-box {
                background-attachment: scroll !important
            }
        }

        @media only screen and (max-width:800px) {
            #content {
                width: 100% !important;
                margin-left: 0 !important
            }

            #main>.fusion-row {
                display: flex;
                flex-wrap: wrap
            }
        }

        @media only screen and (max-width:640px) {

            #main,
            body {
                background-attachment: scroll !important
            }

            #content {
                width: 100% !important;
                margin-left: 0 !important
            }
        }

        @media only screen and (max-device-width:640px) {
            #wrapper {
                width: auto !important
            }

            .fullwidth-box {
                background-attachment: scroll !important
            }

            .title {
                margin-top: 0;
                margin-bottom: 20px
            }

            #content {
                width: 100% !important;
                float: none !important;
                margin-left: 0 !important;
                margin-bottom: 50px
            }

            #content.full-width {
                margin-bottom: 0
            }
        }

        @media only screen and (max-width:1000px) {
            .fusion-responsive-typography-calculated {
                --minFontSize: calc(var(--typography_factor)*var(--base-font-size));
                --minViewportSize: 360;
                --maxViewportSize: var(--grid_main_break_point);
                font-size: calc((var(--fontSize)*1px) - (var(--typography_sensitivity)*(var(--fontSize) - var(--minFontSize))*(var(--minViewportSize)*1px - 100vw))/(var(--maxViewportSize) - var(--minViewportSize)) - (var(--fontSize) - var(--minFontSize))*var(--typography_sensitivity)*1px) !important
            }

            .fusion-top-header .fusion-responsive-typography-calculated {
                --side_header_width: 0;
                --side_header_width-int: 0
            }
        }

        @media only screen and (max-width:800px) {
            .fusion-responsive-typography-calculated {
                --maxViewportSize: var(--content_break_point) !important
            }
        }

        @media only screen and (max-width:800px) {
            .col-sm-3 {
                float: none;
                width: 100%
            }
        }

        .fusion-builder-row.fusion-row {
            max-width: var(--site_width)
        }

        .fusion-faq-shortcode .fusion-accordian .panel-title a .fa-fusion-box {
            background-color: #333
        }

        @media screen and (max-width:640px) {
            .fusion-no-small-visibility {
                display: none !important
            }
        }

        @media screen and (min-width:641px) and (max-width:1024px) {
            .fusion-no-medium-visibility {
                display: none !important
            }
        }

        @media screen and (min-width:1025px) {
            .fusion-no-large-visibility {
                display: none !important
            }
        }

        :root {
            --qlwapp-scheme-font-family: inherit;
            --qlwapp-scheme-font-size: 18px;
            --qlwapp-scheme-icon-size: 60px;
            --qlwapp-scheme-icon-font-size: 24px;
            --qlwapp-scheme-brand: #24c600;
            --qlwapp-scheme-text: #fff;
            --qlwapp-scheme-link: #1e73be;
            --qlwapp-scheme-message: #000;
            --qlwapp-scheme-label: #d93;
            --qlwapp-scheme-name: #000;
            --qlwapp-scheme-qlwapp_scheme_form_nonce: 99f1cb0e59;
            --qlwapp-button-animation-name: none
        }

        .megmun a {
            font-size: 16px;
            color: #000
        }

        .fusion-faqs-wrapper #accordian-1 .fusion-panel {
            border-color: #e2e2e2
        }

        .fusion-accordian #accordian-1 .panel-title a .fa-fusion-box:before {
            font-size: 12px;
            width: 12px
        }

        .fusion-accordian #accordian-1 .panel-title a .fa-fusion-box {
            color: #fff
        }

        .fusion-accordian #accordian-1 .panel-title a {
            font-family: var(--awb-typography1-font-family);
            font-weight: var(--awb-typography1-font-weight);
            font-style: var(--awb-typography1-font-style)
        }

        .fusion-accordian #accordian-1 .panel-title a:not(:hover) {
            color: var(--awb-color4)
        }

        .fusion-accordian #accordian-1 .toggle-content {
            font-family: var(--awb-typography4-font-family);
            font-weight: var(--awb-typography4-font-weight);
            font-style: var(--awb-typography4-font-style)
        }

        .fusion-accordian #accordian-1 .fa-fusion-box {
            background-color: #333;
            border-color: #333
        }

        body {
            --wp--preset--color--black: #000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #fff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--color--awb-color-1: #fff;
            --wp--preset--color--awb-color-2: #e2e2e2;
            --wp--preset--color--awb-color-3: #afc514;
            --wp--preset--color--awb-color-4: #fd7813;
            --wp--preset--color--awb-color-5: #747474;
            --wp--preset--color--awb-color-6: #333;
            --wp--preset--color--awb-color-7: #212934;
            --wp--preset--color--awb-color-8: #000;
            --wp--preset--color--awb-color-custom-10: #fbcab7;
            --wp--preset--color--awb-color-custom-11: #d7e289;
            --wp--preset--color--awb-color-custom-12: #65bc7b;
            --wp--preset--color--awb-color-custom-13: #f2f2f2;
            --wp--preset--color--awb-color-custom-14: rgba(242, 243, 245, .8);
            --wp--preset--color--awb-color-custom-15: #ebeaea;
            --wp--preset--color--awb-color-custom-16: #999;
            --wp--preset--color--awb-color-custom-17: #4a4e57;
            --wp--preset--color--awb-color-custom-18: #e0dede;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, #9b51e0 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, #7adcb4 0%, #00d082 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, #cf2e2e 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, #eee 0%, #a9b8c3 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, #4aeadc 0%, #9778d1 20%, #cf2aba 40%, #ee2c82 60%, #fb6962 80%, #fef84c 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, #ffceec 0%, #9896f0 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, #fecda5 0%, #fe2d2d 50%, #6b003e 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, #ffcb70 0%, #c751c0 50%, #4158d0 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, #fff5cb 0%, #b6e3d4 50%, #33a7b5 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, #caf880 0%, #71ce7e 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, #020381 0%, #2874fc 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 12px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 24px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--font-size--normal: 16px;
            --wp--preset--font-size--xlarge: 32px;
            --wp--preset--font-size--huge: 48px;
            --wp--preset--spacing--20: .44rem;
            --wp--preset--spacing--30: .67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, .2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, .4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, .2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1)
        }

        ul {
            box-sizing: border-box
        }

        :root {
            --wp--preset--font-size--normal: 16px;
            --wp--preset--font-size--huge: 42px
        }

        .screen-reader-text {
            clip: rect(1px, 1px, 1px, 1px);
            word-wrap: normal !important;
            border: 0;
            -webkit-clip-path: inset(50%);
            clip-path: inset(50%);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px
        }
    </style>
    <link rel="preload" data-asynced="1" data-optimized="2" as="style" onload="this.onload=null;this.rel='stylesheet'"
        href="https://www.mymealcatering.com/wp-content/litespeed/ucss/b085debfffc4cbd6761d0952e8985cf3.css?ver=8361f">

    <script data-optimized="1" type="litespeed/javascript"
        data-src="https://www.mymealcatering.com/wp-content/plugins/litespeed-cache/assets/js/css_async.min.js"></script>
    <script data-no-optimize="1">
        var litespeed_docref = sessionStorage.getItem("litespeed_docref"); litespeed_docref && (Object.defineProperty(document, "referrer", { get: function () { return litespeed_docref } }), sessionStorage.removeItem("litespeed_docref"));
    </script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'>
    <title>Catering Diet - Weight Management Program | MyMeal
        Catering</title>
    <meta name="description"
        content="Jasa catering diet dengan custom meal plan. Bisa request menu, bonus medical check up, free ongkir 3x sehari. Yuk konsultasi gratis sekarang!">
    <link rel="canonical" href="https://www.mymealcatering.com/product-services/weight-management">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Catering Diet - Weight Management Program | MyMeal Catering">
    <meta property="og:description"
        content="Jasa catering diet dengan custom meal plan. Bisa request menu, bonus medical check up, free ongkir 3x sehari. Yuk konsultasi gratis sekarang!">
    <meta property="og:url" content="https://www.mymealcatering.com/product-services/weight-management">
    <meta property="og:site_name" content="MyMeal Catering">
    <meta property="article:publisher" content="https://www.facebook.com/mymealcatering">
    <meta property="article:modified_time" content="2023-08-11T04:45:40+00:00">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@mymealcatering">
    <meta name="twitter:label1" content="Est. reading time">
    <meta name="twitter:data1" content="29 minutes">
    <script type="application/ld+json" class="yoast-schema-graph">
  {"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://www.mymealcatering.com/product-services/weight-management","url":"https://www.mymealcatering.com/product-services/weight-management","name":"Catering Diet - Weight Management Program | MyMeal Catering","isPartOf":{"@id":"https://www.mymealcatering.com/#website"},"datePublished":"2019-01-08T16:08:00+00:00","dateModified":"2023-08-11T04:45:40+00:00","description":"Jasa catering diet dengan custom meal plan. Bisa request menu, bonus medical check up, free ongkir 3x sehari. Yuk konsultasi gratis sekarang!","breadcrumb":{"@id":"https://www.mymealcatering.com/product-services/weight-management#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https://www.mymealcatering.com/product-services/weight-management"]}]},{"@type":"BreadcrumbList","@id":"https://www.mymealcatering.com/product-services/weight-management#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://www.mymealcatering.com/"},{"@type":"ListItem","position":2,"name":"Pilihan Paket Catering Sehat","item":"https://www.mymealcatering.com/product-services"},{"@type":"ListItem","position":3,"name":"Catering Diet – Weight Management Program"}]},{"@type":"WebSite","@id":"https://www.mymealcatering.com/#website","url":"https://www.mymealcatering.com/","name":"MyMeal Catering","description":"My Meal Catering - Serve Your Diet Personally","publisher":{"@id":"https://www.mymealcatering.com/#organization"},"potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://www.mymealcatering.com/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"en-US"},{"@type":"Organization","@id":"https://www.mymealcatering.com/#organization","name":"MyMeal Catering","url":"https://www.mymealcatering.com/","logo":{"@type":"ImageObject","inLanguage":"en-US","@id":"https://www.mymealcatering.com/#/schema/logo/image/","url":"https://www.mymealcatering.com/wp-content/uploads/2016/09/logo-mymealcatering2.png","contentUrl":"https://www.mymealcatering.com/wp-content/uploads/2016/09/logo-mymealcatering2.png","width":161,"height":149,"caption":"MyMeal Catering"},"image":{"@id":"https://www.mymealcatering.com/#/schema/logo/image/"},"sameAs":["https://www.facebook.com/mymealcatering","https://twitter.com/mymealcatering","https://www.instagram.com/mymealcatering","https://www.tiktok.com/@mymealcatering","https://www.youtube.com/mymealcatering1","https://id.linkedin.com/company/mymeal-catering"]}]}
  </script>
    <link rel='dns-prefetch' href='//stats.wp.com'>
    <link rel='dns-prefetch' href='//www.googletagmanager.com'>
    <link rel="alternate" type="application/rss+xml" title="MyMeal Catering » Feed"
        href="https://www.mymealcatering.com/feed">
    <link rel="alternate" type="application/rss+xml" title="MyMeal Catering » Comments Feed"
        href="https://www.mymealcatering.com/comments/feed">
    <link rel="shortcut icon" href="https://www.mymealcatering.com/wp-content/uploads/2015/08/favicon.ico"
        type="image/x-icon">
    <meta property="og:title" content="Catering Diet - Weight Management Program">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://www.mymealcatering.com/product-services/weight-management">
    <meta property="og:site_name" content="MyMeal Catering">
    <meta property="og:description" content="Diet keto">
    <meta property="og:image"
        content="https://www.mymealcatering.com/wp-content/uploads/2015/08/logo-mymealcatering-2-e1442918459405.png">

    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <script type="text/template" id="tmpl-variation-template">
  <div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>
        <div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div>
        <div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div>
  </script>
    <script type="text/template" id="tmpl-unavailable-variation-template">
  <p>Sorry, this product is unavailable. Please choose a different combination.</p>
  </script>
    <script type="litespeed/javascript" data-src='https://stats.wp.com/w.js?ver=202351' id='woo-tracks-js'></script>
    <script type="litespeed/javascript" data-src='https://www.googletagmanager.com/gtag/js?id=G-65M1HK7QS2'
        id='qlwapp-analytics-js'></script>
    <script id='qlwapp-analytics-js-after' type="litespeed/javascript">
  (function(){window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments)}
  gtag("js",new Date());gtag("config","G-65M1HK7QS2");function ga_events(events){const{ga_action,ga_category,ga_label,}=events;if(typeof gtag!=="undefined"){gtag("event",ga_action,{"event_category":ga_category,"event_label":ga_label,})}else if(typeof ga!=="undefined"&&typeof ga.getAll!=="undefined"){var tracker=ga.getAll();tracker[0].send("event",ga_category,ga_action,ga_label)}else if(typeof __gaTracker!=="undefined"){__gaTracker("send","event",ga_category,ga_action,ga_label)}
  if(typeof dataLayer!=="undefined"){dataLayer.push({"event":ga_action,"event_action":ga_action,"event_category":ga_category,"event_label":ga_label,})}}
  window.addEventListener("qlwapp.click",function(){ga_events({ga_action:"click:quadlayers_social_chat",ga_category:"Contacts",ga_label:"WhatsApp Plugin",})})})()
  </script>
    <link rel="https://api.w.org/" href="https://www.mymealcatering.com/wp-json/">
    <link rel="alternate" type="application/json" href="https://www.mymealcatering.com/wp-json/wp/v2/pages/31034">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.mymealcatering.com/xmlrpc.php?rsd">
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
        href="https://www.mymealcatering.com/wp-includes/wlwmanifest.xml">
    <meta name="generator" content="WordPress 6.2.3">
    <meta name="generator" content="WooCommerce 8.1.1">
    <link rel='shortlink' href='https://www.mymealcatering.com/?p=31034'>
    <link rel="alternate" type="application/json+oembed"
        href="https://www.mymealcatering.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.mymealcatering.com%2Fproduct-services%2Fweight-management">
    <link rel="alternate" type="text/xml+oembed"
        href="https://www.mymealcatering.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.mymealcatering.com%2Fproduct-services%2Fweight-management&format=xml">

    <style type="text/css" id="css-fb-visibility">
        @media screen and (max-width: 640px) {
            .fusion-no-small-visibility {
                display: none !important;
            }

            body .sm-text-align-center {
                text-align: center !important;
            }

            body .sm-text-align-left {
                text-align: left !important;
            }

            body .sm-text-align-right {
                text-align: right !important;
            }

            body .sm-flex-align-center {
                justify-content: center !important;
            }

            body .sm-flex-align-flex-start {
                justify-content: flex-start !important;
            }

            body .sm-flex-align-flex-end {
                justify-content: flex-end !important;
            }

            body .sm-mx-auto {
                margin-left: auto !important;
                margin-right: auto !important;
            }

            body .sm-ml-auto {
                margin-left: auto !important;
            }

            body .sm-mr-auto {
                margin-right: auto !important;
            }

            body .fusion-absolute-position-small {
                position: absolute;
                top: auto;
                width: 100%;
            }

            .awb-sticky.awb-sticky-small {
                position: sticky;
                top: var(--awb-sticky-offset, 0);
            }
        }

        @media screen and (min-width: 641px) and (max-width: 1024px) {
            .fusion-no-medium-visibility {
                display: none !important;
            }

            body .md-text-align-center {
                text-align: center !important;
            }

            body .md-text-align-left {
                text-align: left !important;
            }

            body .md-text-align-right {
                text-align: right !important;
            }

            body .md-flex-align-center {
                justify-content: center !important;
            }

            body .md-flex-align-flex-start {
                justify-content: flex-start !important;
            }

            body .md-flex-align-flex-end {
                justify-content: flex-end !important;
            }

            body .md-mx-auto {
                margin-left: auto !important;
                margin-right: auto !important;
            }

            body .md-ml-auto {
                margin-left: auto !important;
            }

            body .md-mr-auto {
                margin-right: auto !important;
            }

            body .fusion-absolute-position-medium {
                position: absolute;
                top: auto;
                width: 100%;
            }

            .awb-sticky.awb-sticky-medium {
                position: sticky;
                top: var(--awb-sticky-offset, 0);
            }
        }

        @media screen and (min-width: 1025px) {
            .fusion-no-large-visibility {
                display: none !important;
            }

            body .lg-text-align-center {
                text-align: center !important;
            }

            body .lg-text-align-left {
                text-align: left !important;
            }

            body .lg-text-align-right {
                text-align: right !important;
            }

            body .lg-flex-align-center {
                justify-content: center !important;
            }

            body .lg-flex-align-flex-start {
                justify-content: flex-start !important;
            }

            body .lg-flex-align-flex-end {
                justify-content: flex-end !important;
            }

            body .lg-mx-auto {
                margin-left: auto !important;
                margin-right: auto !important;
            }

            body .lg-ml-auto {
                margin-left: auto !important;
            }

            body .lg-mr-auto {
                margin-right: auto !important;
            }

            body .fusion-absolute-position-large {
                position: absolute;
                top: auto;
                width: 100%;
            }

            .awb-sticky.awb-sticky-large {
                position: sticky;
                top: var(--awb-sticky-offset, 0);
            }
        }
    </style><noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <style>
        :root {
            --qlwapp-scheme-font-family: inherit;
            --qlwapp-scheme-font-size: 18px;
            --qlwapp-scheme-icon-size: 60px;
            --qlwapp-scheme-icon-font-size: 24px;
            --qlwapp-scheme-brand: #24c600;
            --qlwapp-scheme-text: #ffffff;
            --qlwapp-scheme-link: #1e73be;
            --qlwapp-scheme-message: #000000;
            --qlwapp-scheme-label: #dd9933;
            --qlwapp-scheme-name: #000000;
            --qlwapp-scheme-qlwapp_scheme_form_nonce: 99f1cb0e59;
            --qlwapp-button-animation-name: bounce;
        }
    </style>
    <script type="litespeed/javascript">
  var doc=document.documentElement;doc.setAttribute('data-useragent',navigator.userAgent)
  </script>
    <script type="litespeed/javascript">
  (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=!0;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f)})(window,document,'script','dataLayer','GTM-MGGW443')
  </script>
    <style>
        .megmun a {
            font-size: 16px;
            color: #000000;
        }

        .megmun a:hover {
            text-decoration: underline;
        }
    </style>
    <style type="text/css">
        .fusion-faqs-wrapper #accordian-1 .fusion-panel {
            border-color: #e2e2e2;
        }

        .fusion-faqs-wrapper #accordian-1 .fusion-panel:hover {
            border-color: #e2e2e2;
        }

        .fusion-accordian #accordian-1 .panel-title a .fa-fusion-box:before {
            font-size: 12px;
            width: 12px;
        }

        .fusion-accordian #accordian-1 .panel-title a .fa-fusion-box {
            color: #ffffff;
        }

        .fusion-accordian #accordian-1 .panel-title a {
            font-family: var(--awb-typography1-font-family);
            font-weight: var(--awb-typography1-font-weight);
            font-style: var(--awb-typography1-font-style);
        }

        .fusion-accordian #accordian-1 .panel-title a:not(:hover) {
            color: var(--awb-color4);
        }

        .fusion-accordian #accordian-1 .toggle-content {
            font-family: var(--awb-typography4-font-family);
            font-weight: var(--awb-typography4-font-weight);
            font-style: var(--awb-typography4-font-style);
        }

        .fusion-accordian #accordian-1 .fa-fusion-box {
            background-color: #333333 !important;
            border-color: #333333 !important;
        }

        .fusion-accordian #accordian-1 .panel-title a:hover,
        .fusion-accordian #accordian-1 .panel-title a.hover {
            color: #333333;
        }

        .fusion-faq-shortcode .fusion-accordian #accordian-1 .fusion-toggle-boxed-mode:hover .panel-title a {
            color: #333333;
        }

        .fusion-accordian #accordian-1 .panel-title .active .fa-fusion-box,
        .fusion-accordian #accordian-1 .panel-title a:hover .fa-fusion-box,
        .fusion-accordian #accordian-1 .panel-title a.hover .fa-fusion-box {
            background-color: #333333 !important;
            border-color: #333333 !important;
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--color--awb-color-1: #ffffff;
            --wp--preset--color--awb-color-2: #e2e2e2;
            --wp--preset--color--awb-color-3: #afc514;
            --wp--preset--color--awb-color-4: #fd7813;
            --wp--preset--color--awb-color-5: #747474;
            --wp--preset--color--awb-color-6: #333333;
            --wp--preset--color--awb-color-7: #212934;
            --wp--preset--color--awb-color-8: #000000;
            --wp--preset--color--awb-color-custom-10: #fbcab7;
            --wp--preset--color--awb-color-custom-11: #d7e289;
            --wp--preset--color--awb-color-custom-12: #65bc7b;
            --wp--preset--color--awb-color-custom-13: #f2f2f2;
            --wp--preset--color--awb-color-custom-14: rgba(242, 243, 245, 0.8);
            --wp--preset--color--awb-color-custom-15: #ebeaea;
            --wp--preset--color--awb-color-custom-16: #999999;
            --wp--preset--color--awb-color-custom-17: #4a4e57;
            --wp--preset--color--awb-color-custom-18: #e0dede;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 12px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 24px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--font-size--normal: 16px;
            --wp--preset--font-size--xlarge: 32px;
            --wp--preset--font-size--huge: 48px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <style id='wp-block-library-theme-inline-css' type='text/css'>
        .wp-block-audio figcaption {
            color: #555;
            font-size: 13px;
            text-align: center;
        }

        .is-dark-theme .wp-block-audio figcaption {
            color: hsla(0, 0%, 100%, .65);
        }

        .wp-block-audio {
            margin: 0 0 1em;
        }

        .wp-block-code {
            border: 1px solid #ccc;
            border-radius: 4px;
            font-family: Menlo, Consolas, monaco, monospace;
            padding: .8em 1em;
        }

        .wp-block-embed figcaption {
            color: #555;
            font-size: 13px;
            text-align: center;
        }

        .is-dark-theme .wp-block-embed figcaption {
            color: hsla(0, 0%, 100%, .65);
        }

        .wp-block-embed {
            margin: 0 0 1em;
        }

        .blocks-gallery-caption {
            color: #555;
            font-size: 13px;
            text-align: center;
        }

        .is-dark-theme .blocks-gallery-caption {
            color: hsla(0, 0%, 100%, .65);
        }

        .wp-block-image figcaption {
            color: #555;
            font-size: 13px;
            text-align: center;
        }

        .is-dark-theme .wp-block-image figcaption {
            color: hsla(0, 0%, 100%, .65);
        }

        .wp-block-image {
            margin: 0 0 1em;
        }

        .wp-block-pullquote {
            border-bottom: 4px solid;
            border-top: 4px solid;
            color: currentColor;
            margin-bottom: 1.75em;
        }

        .wp-block-pullquote cite,
        .wp-block-pullquote footer,
        .wp-block-pullquote__citation {
            color: currentColor;
            font-size: .8125em;
            font-style: normal;
            text-transform: uppercase;
        }

        .wp-block-quote {
            border-left: .25em solid;
            margin: 0 0 1.75em;
            padding-left: 1em;
        }

        .wp-block-quote cite,
        .wp-block-quote footer {
            color: currentColor;
            font-size: .8125em;
            font-style: normal;
            position: relative;
        }

        .wp-block-quote.has-text-align-right {
            border-left: none;
            border-right: .25em solid;
            padding-left: 0;
            padding-right: 1em;
        }

        .wp-block-quote.has-text-align-center {
            border: none;
            padding-left: 0;
        }

        .wp-block-quote.is-large,
        .wp-block-quote.is-style-large,
        .wp-block-quote.is-style-plain {
            border: none;
        }

        .wp-block-search .wp-block-search__label {
            font-weight: 700;
        }

        .wp-block-search__button {
            border: 1px solid #ccc;
            padding: .375em .625em;
        }

        :where(.wp-block-group.has-background) {
            padding: 1.25em 2.375em;
        }

        .wp-block-separator.has-css-opacity {
            opacity: .4;
        }

        .wp-block-separator {
            border: none;
            border-bottom: 2px solid;
            margin-left: auto;
            margin-right: auto;
        }

        .wp-block-separator.has-alpha-channel-opacity {
            opacity: 1;
        }

        .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
            width: 100px;
        }

        .wp-block-separator.has-background:not(.is-style-dots) {
            border-bottom: none;
            height: 1px;
        }

        .wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots) {
            height: 2px;
        }

        .wp-block-table {
            margin: 0 0 1em;
        }

        .wp-block-table td,
        .wp-block-table th {
            word-break: normal;
        }

        .wp-block-table figcaption {
            color: #555;
            font-size: 13px;
            text-align: center;
        }

        .is-dark-theme .wp-block-table figcaption {
            color: hsla(0, 0%, 100%, .65);
        }

        .wp-block-video figcaption {
            color: #555;
            font-size: 13px;
            text-align: center;
        }

        .is-dark-theme .wp-block-video figcaption {
            color: hsla(0, 0%, 100%, .65);
        }

        .wp-block-video {
            margin: 0 0 1em;
        }

        .wp-block-template-part.has-background {
            margin-bottom: 0;
            margin-top: 0;
            padding: 1.25em 2.375em;
        }
    </style>
    <style id='core-block-supports-inline-css' type='text/css'>
        /**
  * Core styles: block-supports
  */
    </style>
</head>

<body
    class="page-template page-template-100-width page-template-100-width-php page page-id-31034 page-parent page-child parent-pageid-16 theme-Avada woocommerce-no-js fusion-image-hovers fusion-pagination-sizing fusion-button_type-flat fusion-button_span-no fusion-button_gradient-linear avada-image-rollover-circle-no avada-image-rollover-yes avada-image-rollover-direction-left fusion-body ltr no-tablet-sticky-header no-mobile-sticky-header no-desktop-totop no-mobile-totop fusion-disable-outline fusion-sub-menu-fade mobile-logo-pos-center layout-wide-mode avada-has-boxed-modal-shadow-none layout-scroll-offset-full avada-has-zero-margin-offset-top fusion-top-header menu-text-align-center fusion-woo-product-design-clean fusion-woo-shop-page-columns-4 fusion-woo-related-columns-4 fusion-woo-archive-page-columns-3 avada-has-woo-gallery-disabled woo-sale-badge-circle woo-outofstock-badge-top_bar mobile-menu-design-modern fusion-show-pagination-text fusion-header-layout-v5 avada-responsive avada-footer-fx-none avada-menu-highlight-style-bar fusion-search-form-classic fusion-main-menu-search-dropdown fusion-avatar-circle avada-dropdown-styles avada-blog-layout-medium avada-blog-archive-layout-grid avada-header-shadow-no avada-menu-icon-position-left avada-has-100-footer avada-has-breadcrumb-mobile-hidden avada-has-titlebar-hide avada-has-pagination-padding avada-flyout-menu-direction-fade avada-ec-views-v1"
    data-awb-post-id="31034">
    <a class="skip-link screen-reader-text" href="#content">Skip to
        content</a>
    <div id="boxed-wrapper">
        <div id="wrapper" class="fusion-wrapper">
            <div id="home" style="position:relative;top:-1px;"></div>
            <div class="fusion-tb-header">
            <header
          class="fusion-fullwidth fullwidth-box fusion-builder-row-1 fusion-flex-container nonhundred-percent-fullwidth non-hundred-percent-height-scrolling fusion-animated fusion-sticky-container"
          style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-padding-right-small:10px;--awb-padding-left-small:20px;--awb-sticky-background-color:var(--awb-color1) !important;--awb-flex-wrap:wrap;"
          data-animationType="fadeInDown" data-animationDuration="1.0" data-animationOffset="top-into-view"
          data-transition-offset="0" data-scroll-offset="760" data-sticky-small-visibility="1"
          data-sticky-medium-visibility="1" data-sticky-large-visibility="1">
          <div
            class="fusion-builder-row fusion-row fusion-flex-align-items-center fusion-flex-justify-content-space-between fusion-flex-content-wrap"
            style="max-width:1331.2px;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
            <div
              class="fusion-layout-column fusion_builder_column fusion-builder-column-0 fusion_builder_column_1_6 1_6 fusion-flex-column"
              style="--awb-bg-size:cover;--awb-width-large:16.666666666667%;--awb-margin-top-large:10px;--awb-spacing-right-large:11.52%;--awb-margin-bottom-large:10px;--awb-spacing-left-large:11.52%;--awb-width-medium:65%;--awb-order-medium:1;--awb-spacing-right-medium:2.9538461538462%;--awb-spacing-left-medium:2.9538461538462%;--awb-width-small:33.333333333333%;--awb-order-small:2;--awb-spacing-right-small:5.76%;--awb-spacing-left-small:5.76%;">
              <div
                class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-center fusion-content-layout-column">
                <div class="fusion-image-element "
                  style="text-align:center;--awb-max-width:150px;--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
                  <span
                    class=" has-fusion-standard-logo has-fusion-mobile-logo fusion-imageframe imageframe-none imageframe-1 hover-type-none"><a
                      class="fusion-no-lightbox" href="https://www.mymealcatering.com/" target="_self"><img
                        decoding="async"
                        src="https://www.mymealcatering.com/wp-content/uploads/2015/08/logo-mymealcatering-2-e1442918459405.png"
                        srcset="https://www.mymealcatering.com/wp-content/uploads/2015/08/logo-mymealcatering-2-e1442918459405.png 1x, 2x"
                        style="max-height:54px;height:auto;" width="200" height="54"
                        class="img-responsive fusion-standard-logo disable-lazyload" alt="MyMeal Catering Logo" /><img
                        decoding="async"
                        src="https://www.mymealcatering.com/wp-content/uploads/2015/08/logo-mymealcatering-2-e1442918459405.png"
                        srcset="https://www.mymealcatering.com/wp-content/uploads/2015/08/logo-mymealcatering-2-e1442918459405.png 1x, 2x"
                        style="max-height:54px;height:auto;" width="200" height="54"
                        class="img-responsive fusion-mobile-logo disable-lazyload"
                        alt="MyMeal Catering Logo" /></a></span></div>
              </div>
            </div>
            <div
              class="fusion-layout-column fusion_builder_column fusion-builder-column-1 fusion_builder_column_2_3 2_3 fusion-flex-column"
              style="--awb-bg-size:cover;--awb-width-large:66.666666666667%;--awb-margin-top-large:10px;--awb-spacing-right-large:2.88%;--awb-margin-bottom-large:10px;--awb-spacing-left-large:2.88%;--awb-width-medium:5%;--awb-order-medium:0;--awb-spacing-right-medium:38.4%;--awb-spacing-left-medium:38.4%;--awb-width-small:33.333333333333%;--awb-order-small:1;--awb-spacing-right-small:5.76%;--awb-spacing-left-small:5.76%;">
              <div
                class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-center fusion-content-layout-column">
                <nav
                  class="awb-menu awb-menu_row awb-menu_em-hover mobile-mode-collapse-to-button awb-menu_icons-left awb-menu_dc-yes mobile-trigger-fullwidth-off awb-menu_mobile-toggle awb-menu_indent-left mobile-size-full-absolute loading mega-menu-loading collapse-enabled awb-menu_dropdown awb-menu_expand-right awb-menu_transition-slide_up fusion-no-small-visibility"
                  style="--awb-font-size:var(--awb-custom_typography_1-font-size);--awb-text-transform:var(--awb-custom_typography_1-text-transform);--awb-gap:2em;--awb-align-items:center;--awb-justify-content:center;--awb-color:var(--awb-custom_color_7);--awb-letter-spacing:var(--awb-custom_typography_1-letter-spacing);--awb-active-color:var(--awb-color4);--awb-active-border-bottom:2px;--awb-active-border-color:var(--awb-color4);--awb-submenu-color:var(--awb-color4);--awb-submenu-sep-color:rgba(0,0,0,0);--awb-submenu-border-radius-top-left:20px;--awb-submenu-border-radius-top-right:20px;--awb-submenu-border-radius-bottom-right:20px;--awb-submenu-border-radius-bottom-left:20px;--awb-submenu-active-bg:var(--awb-color4);--awb-submenu-active-color:var(--awb-color1);--awb-submenu-space:20px;--awb-submenu-font-size:var(--awb-typography3-font-size);--awb-submenu-text-transform:var(--awb-typography3-text-transform);--awb-icons-color:var(--awb-custom_color_7);--awb-main-justify-content:flex-start;--awb-mobile-bg:var(--awb-color1);--awb-mobile-nav-items-height:55;--awb-mobile-active-bg:var(--awb-color4);--awb-mobile-active-color:var(--awb-color1);--awb-mobile-trigger-font-size:28px;--awb-trigger-padding-top:0px;--awb-trigger-padding-right:0px;--awb-trigger-padding-bottom:0px;--awb-trigger-padding-left:0px;--awb-mobile-trigger-color:var(--awb-color3);--awb-mobile-trigger-background-color:var(--awb-color1);--awb-mobile-nav-trigger-bottom-margin:20px;--awb-mobile-sep-color:var(--awb-color1);--awb-mobile-justify:flex-start;--awb-mobile-caret-left:auto;--awb-mobile-caret-right:0;--awb-box-shadow: 10px 30px -8px hsla(var(--awb-custom_color_1-h),var(--awb-custom_color_1-s),var(--awb-custom_color_1-l),calc(var(--awb-custom_color_1-a) - 80%));;--awb-fusion-font-family-typography:inherit;--awb-fusion-font-style-typography:normal;--awb-fusion-font-weight-typography:400;--awb-fusion-font-family-submenu-typography:var(--awb-typography3-font-family);--awb-fusion-font-weight-submenu-typography:var(--awb-typography3-font-weight);--awb-fusion-font-style-submenu-typography:var(--awb-typography3-font-style);--awb-fusion-font-family-mobile-typography:inherit;--awb-fusion-font-style-mobile-typography:normal;--awb-fusion-font-weight-mobile-typography:400;"
                  aria-label="Header Main Menu" data-breakpoint="1024" data-count="0" data-transition-type="center-grow"
                  data-transition-time="300"><button type="button" class="awb-menu__m-toggle awb-menu__m-toggle_no-text"
                    aria-expanded="false" aria-controls="menu-header-main-menu"><span
                      class="awb-menu__m-toggle-inner"><span class="collapsed-nav-text"><span
                          class="screen-reader-text">Toggle Navigation</span></span><span
                        class="awb-menu__m-collapse-icon awb-menu__m-collapse-icon_no-text"><span
                          class="awb-menu__m-collapse-icon-open awb-menu__m-collapse-icon-open_no-text fa-bars fas"></span><span
                          class="awb-menu__m-collapse-icon-close awb-menu__m-collapse-icon-close_no-text fa-times fas"></span></span></span></button>
                  <ul id="menu-header-main-menu" class="fusion-menu awb-menu__main-ul awb-menu__main-ul_row">
                    <li id="menu-item-64364"
                      class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-64364 awb-menu__li awb-menu__main-li awb-menu__main-li_regular fusion-megamenu-menu fusion-has-all-widgets"
                      data-item-id="64364"><span
                        class="awb-menu__main-background-default awb-menu__main-background-default_center-grow"></span><span
                        class="awb-menu__main-background-active awb-menu__main-background-active_center-grow"></span>
                        <a
                        href="#" class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Home</span>
                        </a><button type="button"
                        aria-label="Open submenu of Paket Catering" aria-expanded="false"
                        class="awb-menu__open-nav-submenu_mobile awb-menu__open-nav-submenu_main"></button>
                      <div
                        class="fusion-megamenu-wrapper fusion-columns-4 columns-per-row-4 columns-4 col-span-12 fusion-megamenu-fullwidth">
                        <div class="row">
                          <div class="fusion-megamenu-holder" style="width:1079px;" data-width="1079px">
                            <ul class="fusion-megamenu">
                              <li id="menu-item-64365"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-64365 awb-menu__li fusion-megamenu-submenu fusion-megamenu-submenu-notitle fusion-megamenu-columns-4 col-lg-3 col-md-3 col-sm-3"
                                style="background-image: url(https://www.mymealcatering.com/wp-content/uploads/Background-Mega-Menu-1.webp);">
                                <div class="fusion-megamenu-widgets-container second-level-widget">
                                  <div id="text-4" class="widget widget_text"
                                    style="border-style: solid;border-color:transparent;border-width:0px;">
                                    <div class="textwidget">
                                      <style>
                                        .megmun a {
                                          font-size: 16px;
                                          color: #000000;
                                        }

                                        .megmun a:hover {
                                          text-decoration: underline;
                                        }
                                      </style>
                                      <div class="megmun">
                                        <p><a href="https://www.mymealcatering.com/catering-isolasi-mandiri">Catering
                                            Isolasi Mandiri</a></p>
                                        <p><a href="https://www.mymealcatering.com/product-services/baby-kid-meal">Baby
                                            &amp; Kids Meal</a></p>
                                        <p><a href="https://www.mymealcatering.com/catering-perusahaan">Catering
                                            Perusahaan</a></p>
                                        <p><a
                                            href="https://www.mymealcatering.com/product-category/organic-shop">Organic
                                            Shop</a></p>
                                        <p><a href="https://www.eatnow.id/">EatNow Healthy Ready Meal</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </li>
                              <li id="menu-item-64366"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-64366 awb-menu__li fusion-megamenu-submenu fusion-megamenu-submenu-notitle fusion-megamenu-columns-4 col-lg-3 col-md-3 col-sm-3"
                                style="background-image: url(https://www.mymealcatering.com/wp-content/uploads/Background-Mega-Menu-2.webp);">
                                <div class="fusion-megamenu-widgets-container second-level-widget">
                                  <div id="text-5" class="widget widget_text"
                                    style="border-style: solid;border-color:transparent;border-width:0px;">
                                    <div class="textwidget">
                                      <div class="megmun">
                                        <a href="https://www.mymealcatering.com/product-services/medical-package"
                                          style="text-align:center; display:block;"><br />
                                          <img data-lazyloaded="1"
                                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxODciIGhlaWdodD0iMTQxIiB2aWV3Qm94PSIwIDAgMTg3IDE0MSI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                            width="187" height="141" decoding="async"
                                            data-src="https://www.mymealcatering.com/wp-content/uploads/Medical-Package-Mega-Menu-2.webp"
                                            alt="Medical Package" style="display:block; margin:auto;" /></p>
                                          <h3>Medical Package</h3>
                                          <p>Catering makanan sehat untuk kebutuhan medis</p>
                                          <p>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </li>
                              <li id="menu-item-64367"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-64367 awb-menu__li fusion-megamenu-submenu fusion-megamenu-submenu-notitle fusion-megamenu-columns-4 col-lg-3 col-md-3 col-sm-3"
                                style="background-image: url(https://www.mymealcatering.com/wp-content/uploads/Background-Mega-Menu-2.webp);">
                                <div class="fusion-megamenu-widgets-container second-level-widget">
                                  <div id="text-6" class="widget widget_text"
                                    style="border-style: solid;border-color:transparent;border-width:0px;">
                                    <div class="textwidget">
                                      <div class="megmun">
                                        <a href="https://www.mymealcatering.com/product-services/healthy-personal-package"
                                          style="text-align:center; display:block;"><br />
                                          <img data-lazyloaded="1"
                                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxODciIGhlaWdodD0iMTQxIiB2aWV3Qm94PSIwIDAgMTg3IDE0MSI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                            width="187" height="141" decoding="async"
                                            data-src="https://www.mymealcatering.com/wp-content/uploads/Healthy-Personal-Mega-Menu-3.webp"
                                            alt="Medical Package" style="display:block; margin:auto;" /></p>
                                          <h3>Healthy Personal</h3>
                                          <p>Catering makanan sehat untuk sehari-hari</p>
                                          <p>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </li>
                              <li id="menu-item-64368"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-64368 awb-menu__li fusion-megamenu-submenu fusion-megamenu-submenu-notitle fusion-megamenu-columns-4 col-lg-3 col-md-3 col-sm-3"
                                style="background-image: url(https://www.mymealcatering.com/wp-content/uploads/Background-Mega-Menu-2.webp);">
                                <div class="fusion-megamenu-widgets-container second-level-widget">
                                  <div id="text-7" class="widget widget_text"
                                    style="border-style: solid;border-color:transparent;border-width:0px;">
                                    <div class="textwidget">
                                      <div class="megmun">
                                        <a href="https://www.mymealcatering.com/product-services/weight-management"
                                          style="text-align:center; display:block;"><br />
                                          <img data-lazyloaded="1"
                                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxODciIGhlaWdodD0iMTQxIiB2aWV3Qm94PSIwIDAgMTg3IDE0MSI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                            width="187" height="141" decoding="async"
                                            data-src="https://www.mymealcatering.com/wp-content/uploads/Weight-Management-Mega-Menu-4.webp"
                                            alt="Medical Package" style="display:block; margin:auto;" /></p>
                                          <h3>Weight Management</h3>
                                          <p>Catering diet sehat untuk manajemen berat badan</p>
                                          <p>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                          <div style="clear:both;"></div>
                        </div>
                      </div>
                    </li>
                    <li id="menu-item-64129"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-64129 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
                      data-item-id="64129"><span
                        class="awb-menu__main-background-default awb-menu__main-background-default_center-grow"></span><span
                        class="awb-menu__main-background-active awb-menu__main-background-active_center-grow"></span><a
                        href="https://www.mymealcatering.com/promo"
                        class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Kategori</span></a><button type="button"
                        aria-label="Open submenu of Promo" aria-expanded="false"
                        class="awb-menu__open-nav-submenu_mobile awb-menu__open-nav-submenu_main"></button>
                      <ul class="awb-menu__sub-ul awb-menu__sub-ul_main">
                        <li id="menu-item-64130"
                          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64130 awb-menu__li awb-menu__sub-li">
                          <a href="#"
                            class="awb-menu__sub-a"><span>Diet Paleo</span></a></li>
                        <li id="menu-item-64131"
                          class="menu-item menu-item-type-post_type menu-item-object-post menu-item-64131 awb-menu__li awb-menu__sub-li">
                          <a href="#"
                            class="awb-menu__sub-a"><span>Diet DASH</span></a></li>
                        <li id="menu-item-64132"
                          class="menu-item menu-item-type-post_type menu-item-object-post menu-item-64132 awb-menu__li awb-menu__sub-li">
                          <a href="#"
                            class="awb-menu__sub-a"><span>Diet Keto</span></a></li>
                      </ul>
                    </li>
                    <li id="menu-item-64375"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64375 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
                      data-item-id="64375"><span
                        class="awb-menu__main-background-default awb-menu__main-background-default_center-grow"></span><span
                        class="awb-menu__main-background-active awb-menu__main-background-active_center-grow"></span><a
                        href="#"
                        class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">About</span></a></li>
                   
                        <!-- <li id="menu-item-64377"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64377 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
                      data-item-id="64377"><span
                        class="awb-menu__main-background-default awb-menu__main-background-default_center-grow"></span><span
                        class="awb-menu__main-background-active awb-menu__main-background-active_center-grow"></span><a
                        href="https://www.mymealcatering.com/articles"
                        class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Artikel</span></a>
                    </li> -->

                    <li id="menu-item-64373"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-64373 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
                      data-item-id="64373"><span
                        class="awb-menu__main-background-default awb-menu__main-background-default_center-grow"></span><span
                        class="awb-menu__main-background-active awb-menu__main-background-active_center-grow"></span>
                        <button type="button"
                        aria-label="Open submenu of Tentang MyMeal" aria-expanded="false"
                        class="awb-menu__open-nav-submenu_mobile awb-menu__open-nav-submenu_main"></button>
                      <ul class="awb-menu__sub-ul awb-menu__sub-ul_main">
                        <li id="menu-item-64374"
                          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64374 awb-menu__li awb-menu__sub-li">
                          <a href="https://www.mymealcatering.com/hubungi-kami"
                            class="awb-menu__sub-a"><span>Kontak</span></a></li>
                        <li id="menu-item-64560"
                          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64560 awb-menu__li awb-menu__sub-li">
                          <a href="https://www.mymealcatering.com/about/mengapa-langganan-mymeal"
                            class="awb-menu__sub-a"><span>Keunggulan MyMeal Catering</span></a></li>
                        <li id="menu-item-64562"
                          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64562 awb-menu__li awb-menu__sub-li">
                          <a href="https://www.mymealcatering.com/about/visi-dan-misi"
                            class="awb-menu__sub-a"><span>Visi, Misi, Values &#038; Culture</span></a></li>
                        <li id="menu-item-64558"
                          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64558 awb-menu__li awb-menu__sub-li">
                          <a href="https://www.mymealcatering.com/about/gallery" class="awb-menu__sub-a"><span>Galeri
                              Menu Catering Sehat</span></a></li>
                        <li id="menu-item-64563"
                          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64563 awb-menu__li awb-menu__sub-li">
                          <a href="https://www.mymealcatering.com/testimonial"
                            class="awb-menu__sub-a"><span>Testimonial</span></a></li>
                        <li id="menu-item-64559"
                          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64559 awb-menu__li awb-menu__sub-li">
                          <a href="https://www.mymealcatering.com/about/bisnis-katering"
                            class="awb-menu__sub-a"><span>Franchise Opportunities</span></a></li>
                      </ul>
                    </li>
                    <li id="menu-item-64472"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64472 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
                      data-item-id="64472"><span
                        class="awb-menu__main-background-default awb-menu__main-background-default_center-grow"></span><span
                        class="awb-menu__main-background-active awb-menu__main-background-active_center-grow"></span></li>
                  </ul>
                </nav>
                <nav
                  class="awb-menu awb-menu_row awb-menu_em-hover mobile-mode-collapse-to-button awb-menu_icons-left awb-menu_dc-yes mobile-trigger-fullwidth-off awb-menu_mobile-toggle awb-menu_indent-left mobile-size-full-absolute loading mega-menu-loading collapse-enabled awb-menu_dropdown awb-menu_expand-right awb-menu_transition-slide_up fusion-no-medium-visibility fusion-no-large-visibility"
                  style="--awb-font-size:var(--awb-custom_typography_1-font-size);--awb-text-transform:var(--awb-custom_typography_1-text-transform);--awb-gap:2em;--awb-align-items:flex-start;--awb-color:var(--awb-custom_color_7);--awb-letter-spacing:var(--awb-custom_typography_1-letter-spacing);--awb-active-color:var(--awb-color4);--awb-active-border-bottom:2px;--awb-active-border-color:var(--awb-color4);--awb-submenu-color:var(--awb-color4);--awb-submenu-sep-color:rgba(0,0,0,0);--awb-submenu-border-radius-top-left:20px;--awb-submenu-border-radius-top-right:20px;--awb-submenu-border-radius-bottom-right:20px;--awb-submenu-border-radius-bottom-left:20px;--awb-submenu-active-bg:var(--awb-color4);--awb-submenu-active-color:var(--awb-color1);--awb-submenu-space:20px;--awb-submenu-font-size:var(--awb-typography3-font-size);--awb-submenu-text-transform:var(--awb-typography3-text-transform);--awb-icons-color:var(--awb-custom_color_7);--awb-main-justify-content:flex-start;--awb-mobile-bg:var(--awb-color1);--awb-mobile-nav-items-height:55;--awb-mobile-active-bg:var(--awb-color4);--awb-mobile-active-color:var(--awb-color1);--awb-mobile-trigger-font-size:28px;--awb-trigger-padding-top:0px;--awb-trigger-padding-right:0px;--awb-trigger-padding-bottom:0px;--awb-trigger-padding-left:0px;--awb-mobile-trigger-color:var(--awb-color3);--awb-mobile-trigger-background-color:var(--awb-color1);--awb-mobile-nav-trigger-bottom-margin:20px;--awb-mobile-sep-color:var(--awb-color2);--awb-mobile-justify:flex-start;--awb-mobile-caret-left:auto;--awb-mobile-caret-right:0;--awb-box-shadow: 10px 30px -8px hsla(var(--awb-custom_color_1-h),var(--awb-custom_color_1-s),var(--awb-custom_color_1-l),calc(var(--awb-custom_color_1-a) - 80%));;--awb-fusion-font-family-typography:inherit;--awb-fusion-font-style-typography:normal;--awb-fusion-font-weight-typography:400;--awb-fusion-font-family-submenu-typography:var(--awb-typography3-font-family);--awb-fusion-font-weight-submenu-typography:var(--awb-typography3-font-weight);--awb-fusion-font-style-submenu-typography:var(--awb-typography3-font-style);--awb-fusion-font-family-mobile-typography:inherit;--awb-fusion-font-style-mobile-typography:normal;--awb-fusion-font-weight-mobile-typography:400;"
                  aria-label="Mobile Menu" data-breakpoint="1024" data-count="1" data-transition-type="center-grow"
                  data-transition-time="300"><button type="button" class="awb-menu__m-toggle awb-menu__m-toggle_no-text"
                    aria-expanded="false" aria-controls="menu-mobile-menu"><span class="awb-menu__m-toggle-inner"><span
                        class="collapsed-nav-text"><span class="screen-reader-text">Toggle Navigation</span></span><span
                        class="awb-menu__m-collapse-icon awb-menu__m-collapse-icon_no-text"><span
                          class="awb-menu__m-collapse-icon-open awb-menu__m-collapse-icon-open_no-text fa-bars fas"></span><span
                          class="awb-menu__m-collapse-icon-close awb-menu__m-collapse-icon-close_no-text fa-times fas"></span></span></span></button>
                  <ul id="menu-mobile-menu" class="fusion-menu awb-menu__main-ul awb-menu__main-ul_row">
                    <li id="menu-item-58396"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58396 awb-menu__li awb-menu__main-li awb-menu__li_button"
                      data-item-id="58396"><a href="https://www.mymealcatering.com/order-dan-konsultasi-gratis"
                        class="awb-menu__main-a awb-menu__main-a_button"><span
                          class="menu-text fusion-button button-default button-medium">Konsultasi Gratis
                          DISINI!</span></a></li>
                    <li id="menu-item-64099"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64099 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
                      data-item-id="64099"><span
                        class="awb-menu__main-background-default awb-menu__main-background-default_center-grow"></span><span
                        class="awb-menu__main-background-active awb-menu__main-background-active_center-grow"></span><a
                        href="https://www.mymealcatering.com/cara-pesan-catering"
                        class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Cara Pesan
                          Catering</span></a></li>
                    <li id="menu-item-31702"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31702 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
                      data-item-id="31702"><span
                        class="awb-menu__main-background-default awb-menu__main-background-default_center-grow"></span><span
                        class="awb-menu__main-background-active awb-menu__main-background-active_center-grow"></span><a
                        href="https://www.mymealcatering.com/product-services/medical-package"
                        class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Catering Diet
                          Medis/Pantangan &#8211; Medical Package</span></a></li>
                    <li id="menu-item-31705"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-31705 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
                      data-item-id="31705"><span
                        class="awb-menu__main-background-default awb-menu__main-background-default_center-grow"></span><span
                        class="awb-menu__main-background-active awb-menu__main-background-active_center-grow"></span><a
                        href="https://www.mymealcatering.com/product-services/weight-management"
                        class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Weight
                          Management</span><span class="awb-menu__open-nav-submenu-hover"></span></a><button
                        type="button" aria-label="Open submenu of Weight Management" aria-expanded="false"
                        class="awb-menu__open-nav-submenu_mobile awb-menu__open-nav-submenu_main"></button>
                      <ul class="awb-menu__sub-ul awb-menu__sub-ul_main">
                        <li id="menu-item-31708"
                          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31708 awb-menu__li awb-menu__sub-li">
                          <a href="https://www.mymealcatering.com/product-services/weight-management/south-beach-diet"
                            class="awb-menu__sub-a"><span>Catering Diet South Beach</span></a></li>
                        <li id="menu-item-31706"
                          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31706 awb-menu__li awb-menu__sub-li">
                          <a href="https://www.mymealcatering.com/product-services/weight-management/atkins-diet"
                            class="awb-menu__sub-a"><span>Catering Diet Atkin</span></a></li>
                        <li id="menu-item-31709"
                          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31709 awb-menu__li awb-menu__sub-li">
                          <a href="https://www.mymealcatering.com/product-services/weight-management/keto-diet"
                            class="awb-menu__sub-a"><span>Catering Diet Keto</span></a></li>
                        <li id="menu-item-31707"
                          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31707 awb-menu__li awb-menu__sub-li">
                          <a href="https://www.mymealcatering.com/product-services/weight-management/mayo-diet"
                            class="awb-menu__sub-a"><span>Catering Diet Mayo</span></a></li>
                      </ul>
                    </li>
                    <li id="menu-item-58383"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58383 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
                      data-item-id="58383"><span
                        class="awb-menu__main-background-default awb-menu__main-background-default_center-grow"></span><span
                        class="awb-menu__main-background-active awb-menu__main-background-active_center-grow"></span><a
                        href="https://www.mymealcatering.com/product-services/healthy-personal-package"
                        class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Healthy
                          Personal</span></a></li>
                    <li id="menu-item-58711"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58711 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
                      data-item-id="58711"><span
                        class="awb-menu__main-background-default awb-menu__main-background-default_center-grow"></span><span
                        class="awb-menu__main-background-active awb-menu__main-background-active_center-grow"></span><a
                        href="https://www.mymealcatering.com/product-services/baby-kid-meal"
                        class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Baby &#038; Kids
                          Meal</span></a></li>
                    <li id="menu-item-58385"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-58385 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
                      data-item-id="58385"><span
                        class="awb-menu__main-background-default awb-menu__main-background-default_center-grow"></span><span
                        class="awb-menu__main-background-active awb-menu__main-background-active_center-grow"></span><a
                        href="https://www.mymealcatering.com/product-services"
                        class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Paket Lain</span><span
                          class="awb-menu__open-nav-submenu-hover"></span></a><button type="button"
                        aria-label="Open submenu of Paket Lain" aria-expanded="false"
                        class="awb-menu__open-nav-submenu_mobile awb-menu__open-nav-submenu_main"></button>
                      <ul class="awb-menu__sub-ul awb-menu__sub-ul_main">
                        <li id="menu-item-58386"
                          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58386 awb-menu__li awb-menu__sub-li">
                          <a href="https://www.mymealcatering.com/catering-isolasi-mandiri"
                            class="awb-menu__sub-a"><span>Catering Isolasi Mandiri</span></a></li>
                        <li id="menu-item-58387"
                          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58387 awb-menu__li awb-menu__sub-li">
                          <a href="https://www.mymealcatering.com/catering-perusahaan"
                            class="awb-menu__sub-a"><span>Catering Perusahaan (Rumah Sakit, Karyawan, Event,
                              Sekolah)</span></a></li>
                        <li id="menu-item-58389"
                          class="menu-item menu-item-type-custom menu-item-object-custom menu-item-58389 awb-menu__li awb-menu__sub-li">
                          <a href="https://www.eatnow.id" class="awb-menu__sub-a"><span>EatNow Healthy RTE
                              Meal</span></a></li>
                        <li id="menu-item-61700"
                          class="menu-item menu-item-type-custom menu-item-object-custom menu-item-61700 awb-menu__li awb-menu__sub-li">
                          <a href="https://www.mymealcatering.com/product-category/organic-shop"
                            class="awb-menu__sub-a"><span>Organic Shop</span></a></li>
                      </ul>
                    </li>
                    <li id="menu-item-58379"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58379 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
                      data-item-id="58379"><span
                        class="awb-menu__main-background-default awb-menu__main-background-default_center-grow"></span><span
                        class="awb-menu__main-background-active awb-menu__main-background-active_center-grow"></span><a
                        href="https://www.mymealcatering.com/promo"
                        class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Promo</span></a></li>
                    <li id="menu-item-64098"
                      class="menu-item menu-item-type-custom menu-item-object-custom menu-item-64098 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
                      data-item-id="64098"><span
                        class="awb-menu__main-background-default awb-menu__main-background-default_center-grow"></span><span
                        class="awb-menu__main-background-active awb-menu__main-background-active_center-grow"></span><a
                        href="#" class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Ultimate Diet
                          Guide</span></a></li>
                    <li id="menu-item-58391"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58391 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
                      data-item-id="58391"><span
                        class="awb-menu__main-background-default awb-menu__main-background-default_center-grow"></span><span
                        class="awb-menu__main-background-active awb-menu__main-background-active_center-grow"></span><a
                        href="https://www.mymealcatering.com/articles"
                        class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Artikel</span></a>
                    </li>
                    <li id="menu-item-58390"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-58390 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
                      data-item-id="58390"><span
                        class="awb-menu__main-background-default awb-menu__main-background-default_center-grow"></span><span
                        class="awb-menu__main-background-active awb-menu__main-background-active_center-grow"></span><a
                        href="https://www.mymealcatering.com/about"
                        class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Tentang
                          MyMeal</span><span class="awb-menu__open-nav-submenu-hover"></span></a><button type="button"
                        aria-label="Open submenu of Tentang MyMeal" aria-expanded="false"
                        class="awb-menu__open-nav-submenu_mobile awb-menu__open-nav-submenu_main"></button>
                      <ul class="awb-menu__sub-ul awb-menu__sub-ul_main">
                        <li id="menu-item-58394"
                          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58394 awb-menu__li awb-menu__sub-li">
                          <a href="https://www.mymealcatering.com/about/visi-dan-misi"
                            class="awb-menu__sub-a"><span>Visi, Misi, Values &#038; Culture</span></a></li>
                        <li id="menu-item-58393"
                          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58393 awb-menu__li awb-menu__sub-li">
                          <a href="https://www.mymealcatering.com/about/mengapa-langganan-mymeal"
                            class="awb-menu__sub-a"><span>Keunggulan MyMeal Catering</span></a></li>
                        <li id="menu-item-62876"
                          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-62876 awb-menu__li awb-menu__sub-li">
                          <a href="https://www.mymealcatering.com/testimonial" class="awb-menu__sub-a"><span>Testimonial
                              – Catering Diet Sehat</span></a></li>
                      </ul>
                    </li>
                    <li id="menu-item-58395"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58395 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
                      data-item-id="58395"><span
                        class="awb-menu__main-background-default awb-menu__main-background-default_center-grow"></span><span
                        class="awb-menu__main-background-active awb-menu__main-background-active_center-grow"></span><a
                        href="https://www.mymealcatering.com/hubungi-kami"
                        class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Hubungi
                          Kami</span></a></li>
                  </ul>
                </nav>
              </div>
            </div>
            
          </div>
        </header>
            </div>
            <div id="sliders-container" class="fusion-slider-visibility">
            </div>
            <main id="main" class="clearfix width-100">
                <div class="fusion-row" style="max-width:100%;">
                    <section id="content" class="full-width">
                        <div id="post-31034" class="post-31034 page type-page status-publish hentry">
                            <span class="entry-title rich-snippet-hidden">Catering Diet –
                                Weight Management Program</span><span class="vcard rich-snippet-hidden"><span
                                    class="fn"><a href="https://www.mymealcatering.com/author/mymealcatering"
                                        title="Posts by mymealcatering"
                                        rel="author">mymealcatering</a></span></span><span
                                class="updated rich-snippet-hidden">2023-08-11T11:45:40+07:00</span>
                            <div class="post-content">
                                <div class="fusion-fullwidth fullwidth-box fusion-builder-row-2 fusion-flex-container has-pattern-background has-mask-background nonhundred-percent-fullwidth non-hundred-percent-height-scrolling"
                                    style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-padding-top:80px;--awb-padding-bottom:80px;--awb-padding-top-small:32px;--awb-flex-wrap:wrap;">
                                    <div class="fusion-builder-row fusion-row fusion-flex-align-items-center fusion-flex-content-wrap"
                                        style="max-width:1331.2px;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
                                        <div class="fusion-layout-column fusion_builder_column fusion-builder-column-3 fusion_builder_column_1_2 1_2 fusion-flex-column"
                                            style="--awb-bg-size:cover;--awb-width-large:50%;--awb-margin-top-large:10px;--awb-spacing-right-large:3.84%;--awb-margin-bottom-large:0px;--awb-spacing-left-large:3.84%;--awb-width-medium:50%;--awb-order-medium:0;--awb-spacing-right-medium:3.84%;--awb-spacing-left-medium:3.84%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                                            <div
                                                class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
                                                <div class="fusion-title title fusion-title-1 fusion-sep-none fusion-title-text fusion-title-size-one"
                                                    style="--awb-text-color:var(--awb-color6);--awb-margin-bottom:30px;--awb-font-size:48px;">
                                                    <h1 class="fusion-title-heading title-heading-left fusion-responsive-typography-calculated"
                                                        style="margin:0;font-size:1em;letter-spacing:-0.015em;text-transform:capitalize;--fontSize:48;line-height:1.4;">
                                                        Maintenance Berat badan</h1>
                                                </div>
                                                <div class="fusion-text fusion-text-1 fusion-text-no-margin"
                                                    style="--awb-font-size:20px;--awb-line-height:1.8;--awb-letter-spacing:-0.015em;--awb-text-transform:var(--awb-typography2-text-transform);--awb-text-color:var(--awb-color6);--awb-margin-bottom:30px;">
                                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis
                                                        beatae voluptas consequatur quibusdam!</p>
                                                </div>
                                                <div>
                                                <a class=
                                                "fusion-button button-flat fusion-button-default-size button-default fusion-button-default button-2 fusion-button-default-span fusion-button-default-type"
                                                style=
                                                "--button-border-radius-top-left:0;--button-border-radius-top-right:0;--button-border-radius-bottom-right:0;--button-border-radius-bottom-left:0;--button_text_transform:capitalize;"
                                                target="_self" href=
                                                "<?= base_url('member') ?>">
                                                <span class=
                                                "fusion-button-text">Kembali ke Halaman Awal
                                                </span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fusion-layout-column fusion_builder_column fusion-builder-column-4 fusion_builder_column_1_2 1_2 fusion-flex-column"
                                            style="--awb-padding-top-small:50px;--awb-bg-size:cover;--awb-width-large:50%;--awb-margin-top-large:10px;--awb-spacing-right-large:0;--awb-margin-bottom-large:0px;--awb-spacing-left-large:0;--awb-width-medium:50%;--awb-order-medium:0;--awb-spacing-right-medium:0;--awb-spacing-left-medium:0;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                                            <div
                                                class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
                                                <div class="fusion-image-element"
                                                    style="--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
                                                    <span
                                                        class="fusion-imageframe imageframe-none imageframe-2 hover-type-none">
                                                        <img data-lazyloaded="1"
                                                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4MTAiIGhlaWdodD0iNTU1IiB2aWV3Qm94PSIwIDAgODEwIDU1NSI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                                            decoding="async" width="810" height="555"
                                                            alt="mymeal catering food" title="mymeal catering food"
                                                            data-src="https://www.mymealcatering.com/wp-content/uploads/mymeal-catering-food.webp"
                                                            class="img-responsive wp-image-72873"
                                                            data-srcset="https://www.mymealcatering.com/wp-content/uploads/mymeal-catering-food-200x137.webp 200w, https://www.mymealcatering.com/wp-content/uploads/mymeal-catering-food-300x206.webp 300w, https://www.mymealcatering.com/wp-content/uploads/mymeal-catering-food-400x274.webp 400w, https://www.mymealcatering.com/wp-content/uploads/mymeal-catering-food-500x343.webp 500w, https://www.mymealcatering.com/wp-content/uploads/mymeal-catering-food-600x411.webp 600w, https://www.mymealcatering.com/wp-content/uploads/mymeal-catering-food-768x526.webp 768w, https://www.mymealcatering.com/wp-content/uploads/mymeal-catering-food-800x548.webp 800w, https://www.mymealcatering.com/wp-content/uploads/mymeal-catering-food.webp 810w"
                                                            data-sizes="(max-width: 1024px) 100vw, (max-width: 640px) 100vw, 800px"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php foreach ($data_menu as $data) : ?>
                                <div class="fusion-layout-column fusion_builder_column fusion-builder-column-10 fusion_builder_column_1_2 1_2 fusion-flex-column fusion-column-inner-bg-wrapper"
                                    style="--awb-inner-bg-color:#ffffff;--awb-inner-bg-color-hover:#ffffff;--awb-inner-bg-size:cover;--awb-box-shadow:0px 0px 25px 15px rgba(16,0,51,0.05);;--awb-width-large:50%;--awb-margin-top-large:10px;--awb-spacing-right-large:3.84%;--awb-margin-bottom-large:10px;--awb-spacing-left-large:3.84%;--awb-width-medium:50%;--awb-order-medium:0;--awb-spacing-right-medium:3.84%;--awb-margin-bottom-medium:30px;--awb-spacing-left-medium:3.84%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-margin-bottom-small:12px;--awb-spacing-left-small:1.92%;">
                                    <span class="fusion-column-inner-bg hover-type-none"><a class="fusion-column-anchor"
                                            href="https://www.mymealcatering.com/product-services/weight-management/keto-diet">
                                        </a></span>
                                    <div
                                        class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
                                        <div class="fusion-builder-row fusion-builder-row-inner fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
                                            style="width:104% !important;max-width:104% !important;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
                                            <div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-4 fusion_builder_column_inner_2_5 2_5 fusion-flex-column fusion-flex-align-self-center"
                                                style="--awb-bg-size:cover;--awb-width-large:40%;--awb-margin-top-large:0px;--awb-spacing-right-large:0%;--awb-margin-bottom-large:0px;--awb-spacing-left-large:4.8%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                                                <div
                                                    class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
                                                    <div class="fusion-image-element"
                                                        style="--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
                                                        <span
                                                            class="fusion-imageframe imageframe-none imageframe-5 hover-type-none">
                                                            <img data-lazyloaded="1"
                                                                src="<?= base_url('uploads/' . $data['foto_menu']) ?>"
                                                                decoding="async" width="2560" height="2560"
                                                                alt="<?= $data['foto_menu'] ?>" title="atkin fase 2-min"
                                                                class="img-responsive wp-image-58046"
                                                                data-sizes="(max-width: 1024px) 100vw, (max-width: 640px) 100vw, 600px"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-5 fusion_builder_column_inner_3_5 3_5 fusion-flex-column fusion-flex-align-self-center"
                                                style="--awb-padding-top:12px;--awb-padding-right:12px;--awb-padding-bottom:12px;--awb-padding-left:12px;--awb-bg-size:cover;--awb-width-large:60%;--awb-margin-top-large:0px;--awb-spacing-right-large:3.2%;--awb-margin-bottom-large:0px;--awb-spacing-left-large:3.2%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                                                <div
                                                    class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
                                                    <div class="fusion-title title fusion-title-6 fusion-sep-none fusion-title-text fusion-title-size-three"
                                                        style="--awb-font-size:24px;">
                                                        <h3 class="fusion-title-heading title-heading-left fusion-responsive-typography-calculated"
                                                            style="margin:0;font-size:1em;letter-spacing:-0.015em;text-transform:capitalize;--fontSize:24;line-height:1.4;">
                                                            <?= $data['id_menu'] ?></h3>
                                                    </div>
                                                    <div class="fusion-text fusion-text-7"
                                                        style="--awb-font-size:16px;--awb-line-height:1.8;--awb-letter-spacing:-0.015em;--awb-text-transform:var(--awb-typography4-text-transform);--awb-text-color:var(--awb-color6);">
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, itaque.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach ?>

                            </div>
                        </div>


                </div>
        </div>
        </section>
    </div>
    </main>
    <div class="fusion-tb-footer fusion-footer">
        <div class="fusion-footer-widget-area fusion-widget-area">
            <div class="fusion-fullwidth fullwidth-box fusion-builder-row-12 fusion-flex-container has-pattern-background has-mask-background nonhundred-percent-fullwidth non-hundred-percent-height-scrolling"
                style="--link_hover_color: var(--awb-color4);--link_color: var(--awb-color6);--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-padding-top:30px;--awb-padding-bottom:30px;--awb-background-color:#f2f2f2;--awb-flex-wrap:wrap;">
                <div class="fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
                    style="max-width:1331.2px;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
                    <div class="fusion-layout-column fusion_builder_column fusion-builder-column-40 fusion_builder_column_1_4 1_4 fusion-flex-column fusion-flex-align-self-stretch"
                        style="--awb-padding-bottom:20px;--awb-bg-size:cover;--awb-width-large:25%;--awb-margin-top-large:10px;--awb-spacing-right-large:7.68%;--awb-margin-bottom-large:10px;--awb-spacing-left-large:7.68%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;"
                        data-motion-effects="[{"
                        type":"","scroll_type":"transition","scroll_direction":"up","transition_speed":"1","fade_type":"in","scale_type":"up","initial_scale":"1","max_scale":"1.5","min_scale":"0.5","initial_rotate":"0","end_rotate":"30","initial_blur":"0","end_blur":"3","start_element":"top","start_viewport":"bottom","end_element":"bottom","end_viewport":"top","mouse_effect":"track","mouse_effect_direction":"opposite","mouse_effect_speed":"2","infinite_animation":"float","infinite_animation_speed":"2"}]"
                        data-scroll-devices="small-visibility,medium-visibility,large-visibility">
                        <div
                            class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-space-between fusion-content-layout-column">
                            <div class="fusion-builder-row fusion-builder-row-inner fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
                                style="width:104% !important;max-width:104% !important;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
                                <div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-8 fusion_builder_column_inner_1_1 1_1 fusion-flex-column"
                                    style="--awb-bg-size:cover;--awb-width-large:100%;--awb-margin-top-large:10px;--awb-spacing-right-large:1.92%;--awb-margin-bottom-large:10px;--awb-spacing-left-large:1.92%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                                    <div
                                        class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
                                        <div class="fusion-image-element"
                                            style="--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
                                            <span
                                                class="fusion-imageframe imageframe-none imageframe-14 hover-type-none">
                                                <img decoding="async" width="200" height="54"
                                                    alt="My Meal Catering - Katering Kesehatan dan Diet"
                                                    title="logo-mymealcatering-2"
                                                    src="https://www.mymealcatering.com/wp-content/uploads/2015/08/logo-mymealcatering-2-e1442918459405.png"
                                                    class="img-responsive wp-image-9980"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="fusion-layout-column fusion_builder_column_inner fusion-builder-nested-column-9 fusion_builder_column_inner_1_1 1_1 fusion-flex-column"
                                    style="--awb-bg-size:cover;--awb-width-large:100%;--awb-margin-top-large:10px;--awb-spacing-right-large:1.92%;--awb-margin-bottom-large:10px;--awb-spacing-left-large:1.92%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                                    <div
                                        class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
                                        <div class="fusion-text fusion-text-33" style="--awb-font-size:14px;">
                                            <p>Healthy personalized catering<br>
                                                made just for you</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fusion-social-links fusion-social-links-1"
                                style="--awb-margin-top:0px;--awb-margin-right:0px;--awb-margin-bottom:0px;--awb-margin-left:0px;--awb-box-border-top:0px;--awb-box-border-right:0px;--awb-box-border-bottom:0px;--awb-box-border-left:0px;--awb-icon-colors-hover:var(--awb-color4);--awb-box-colors-hover:rgba(242,243,245,0.8);--awb-box-border-color:var(--awb-color3);--awb-box-border-color-hover:var(--awb-color4);">
                                <div class="fusion-social-networks color-type-custom">
                                    <div class="fusion-social-networks-wrapper">
                                        <a class="fusion-social-network-icon fusion-tooltip fusion-instagram awb-icon-instagram"
                                            style="color:var(--awb-color6);font-size:16px;" title="Instagram"
                                            aria-label="instagram" target="_blank" rel="noopener noreferrer"
                                            href="https://www.instagram.com/mymealcatering"></a><a
                                            class="fusion-social-network-icon fusion-tooltip fusion-facebook awb-icon-facebook"
                                            style="color:var(--awb-color6);font-size:16px;" title="Facebook"
                                            aria-label="facebook" target="_blank" rel="noopener noreferrer"
                                            href="https://www.facebook.com/mymealcatering"></a><a
                                            class="fusion-social-network-icon fusion-tooltip fusion-youtube awb-icon-youtube"
                                            style="color:var(--awb-color6);font-size:16px;" title="YouTube"
                                            aria-label="youtube" target="_blank" rel="noopener noreferrer"
                                            href="https://www.youtube.com/mymealcatering1"></a><a
                                            class="fusion-social-network-icon fusion-tooltip fusion-tiktok awb-icon-tiktok"
                                            style="color:var(--awb-color6);font-size:16px;" title="Tiktok"
                                            aria-label="tiktok" target="_blank" rel="noopener noreferrer"
                                            href="https://www.tiktok.com/@mymealcatering"></a><a
                                            class="fusion-social-network-icon fusion-tooltip fusion-twitter awb-icon-twitter"
                                            style="color:var(--awb-color6);font-size:16px;" title="Twitter"
                                            aria-label="twitter" target="_blank" rel="noopener noreferrer"
                                            href="https://www.twitter.com/mymealcatering"></a><a
                                            class="fusion-social-network-icon fusion-tooltip fusion-linkedin awb-icon-linkedin"
                                            style="color:var(--awb-color6);font-size:16px;" title="LinkedIn"
                                            aria-label="linkedin" target="_blank" rel="noopener noreferrer"
                                            href="https://www.linkedin.com/company/mymeal-catering/mycompany/"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fusion-layout-column fusion_builder_column fusion-builder-column-41 fusion_builder_column_1_4 1_4 fusion-flex-column fusion-flex-align-self-stretch"
                        style="--awb-bg-size:cover;--awb-width-large:25%;--awb-margin-top-large:10px;--awb-spacing-right-large:7.68%;--awb-margin-bottom-large:10px;--awb-spacing-left-large:7.68%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                        <div
                            class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
                            <div>
                                <a class="fusion-button button-flat fusion-button-default-size button-custom fusion-button-default button-8 fusion-button-default-span fusion-button-default-type"
                                    style="--button_accent_color:var(--awb-color6);--button_border_color:var(--awb-color6);--button_accent_hover_color:var(--awb-color6);--button_border_hover_color:var(--awb-color6);--button-border-radius-top-left:0;--button-border-radius-top-right:0;--button-border-radius-bottom-right:0;--button-border-radius-bottom-left:0;--button_gradient_top_color:rgba(252,252,252,0);--button_gradient_bottom_color:rgba(252,252,252,0);--button_gradient_top_color_hover:rgba(252,252,252,0);--button_gradient_bottom_color_hover:rgba(252,252,252,0);--button_text_transform:capitalize;--button_font_size:16px;--button_padding-left:0px;--button_typography-font-family:"
                                    Roboto";--button_typography-font-style:normal;--button_typography-font-weight:500;"
                                    target="_self" data-hover="underline"
                                    href="https://www.mymealcatering.com/product-services/medical-package">
                                    <span class="fusion-button-text">medical
                                        package</span></a>
                            </div>
                            <div>
                                <a class="fusion-button button-flat fusion-button-default-size button-custom fusion-button-default button-9 fusion-button-default-span fusion-button-default-type"
                                    style="--button_accent_color:var(--awb-color6);--button_border_color:var(--awb-color6);--button_accent_hover_color:var(--awb-color6);--button_border_hover_color:var(--awb-color6);--button-border-radius-top-left:0;--button-border-radius-top-right:0;--button-border-radius-bottom-right:0;--button-border-radius-bottom-left:0;--button_gradient_top_color:rgba(252,252,252,0);--button_gradient_bottom_color:rgba(252,252,252,0);--button_gradient_top_color_hover:rgba(252,252,252,0);--button_gradient_bottom_color_hover:rgba(252,252,252,0);--button_text_transform:capitalize;--button_font_size:16px;--button_padding-left:0px;--button_typography-font-family:"
                                    Roboto";--button_typography-font-style:normal;--button_typography-font-weight:500;"
                                    target="_self" data-hover="underline"
                                    href="https://www.mymealcatering.com/product-services/weight-management">
                                    <span class="fusion-button-text">weight
                                        management</span></a>
                            </div>
                            <div>
                                <a class="fusion-button button-flat fusion-button-default-size button-custom fusion-button-default button-10 fusion-button-default-span fusion-button-default-type"
                                    style="--button_accent_color:var(--awb-color6);--button_border_color:var(--awb-color6);--button_accent_hover_color:var(--awb-color6);--button_border_hover_color:var(--awb-color6);--button-border-radius-top-left:0;--button-border-radius-top-right:0;--button-border-radius-bottom-right:0;--button-border-radius-bottom-left:0;--button_gradient_top_color:rgba(252,252,252,0);--button_gradient_bottom_color:rgba(252,252,252,0);--button_gradient_top_color_hover:rgba(252,252,252,0);--button_gradient_bottom_color_hover:rgba(252,252,252,0);--button_text_transform:capitalize;--button_font_size:16px;--button_padding-left:0px;--button_typography-font-family:"
                                    Roboto";--button_typography-font-style:normal;--button_typography-font-weight:500;"
                                    target="_self" data-hover="underline"
                                    href="https://www.mymealcatering.com/product-services/healthy-personal-package">
                                    <span class="fusion-button-text">healthy
                                        personal</span></a>
                            </div>
                            <div>
                                <a class="fusion-button button-flat fusion-button-default-size button-custom fusion-button-default button-11 fusion-button-default-span fusion-button-default-type"
                                    style="--button_accent_color:var(--awb-color6);--button_border_color:var(--awb-color6);--button_accent_hover_color:var(--awb-color6);--button_border_hover_color:var(--awb-color6);--button-border-radius-top-left:0;--button-border-radius-top-right:0;--button-border-radius-bottom-right:0;--button-border-radius-bottom-left:0;--button_gradient_top_color:rgba(252,252,252,0);--button_gradient_bottom_color:rgba(252,252,252,0);--button_gradient_top_color_hover:rgba(252,252,252,0);--button_gradient_bottom_color_hover:rgba(252,252,252,0);--button_text_transform:capitalize;--button_font_size:16px;--button_padding-left:0px;--button_typography-font-family:"
                                    Roboto";--button_typography-font-style:normal;--button_typography-font-weight:500;"
                                    target="_self" data-hover="underline"
                                    href="https://www.mymealcatering.com/product-services/baby-kid-meal">
                                    <span class="fusion-button-text">baby & kids
                                        meal</span></a>
                            </div>
                            <div>
                                <a class="fusion-button button-flat fusion-button-default-size button-custom fusion-button-default button-12 fusion-button-default-span fusion-button-default-type"
                                    style="--button_accent_color:var(--awb-color6);--button_border_color:var(--awb-color6);--button_accent_hover_color:var(--awb-color6);--button_border_hover_color:var(--awb-color6);--button-border-radius-top-left:0;--button-border-radius-top-right:0;--button-border-radius-bottom-right:0;--button-border-radius-bottom-left:0;--button_gradient_top_color:rgba(252,252,252,0);--button_gradient_bottom_color:rgba(252,252,252,0);--button_gradient_top_color_hover:rgba(252,252,252,0);--button_gradient_bottom_color_hover:rgba(252,252,252,0);--button_text_transform:capitalize;--button_font_size:16px;--button_padding-left:0px;--button_typography-font-family:"
                                    Roboto";--button_typography-font-style:normal;--button_typography-font-weight:500;"
                                    target="_self" data-hover="underline"
                                    href="https://www.mymealcatering.com/product-category/organic-shop">
                                    <span class="fusion-button-text">organic
                                        shop</span></a>
                            </div>
                            <div>
                                <a class="fusion-button button-flat fusion-button-default-size button-custom fusion-button-default button-13 fusion-button-default-span fusion-button-default-type"
                                    style="--button_accent_color:var(--awb-color6);--button_border_color:var(--awb-color6);--button_accent_hover_color:var(--awb-color6);--button_border_hover_color:var(--awb-color6);--button-border-radius-top-left:0;--button-border-radius-top-right:0;--button-border-radius-bottom-right:0;--button-border-radius-bottom-left:0;--button_gradient_top_color:rgba(252,252,252,0);--button_gradient_bottom_color:rgba(252,252,252,0);--button_gradient_top_color_hover:rgba(252,252,252,0);--button_gradient_bottom_color_hover:rgba(252,252,252,0);--button_text_transform:capitalize;--button_font_size:16px;--button_padding-left:0px;--button_typography-font-family:"
                                    Roboto";--button_typography-font-style:normal;--button_typography-font-weight:500;"
                                    target="_self" data-hover="underline" href="https://www.eatnow.id/"><span
                                        class="fusion-button-text">eatnow
                                        ready-to-eat</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="fusion-layout-column fusion_builder_column fusion-builder-column-42 fusion_builder_column_1_4 1_4 fusion-flex-column fusion-flex-align-self-stretch"
                        style="--awb-bg-size:cover;--awb-width-large:25%;--awb-margin-top-large:10px;--awb-spacing-right-large:7.68%;--awb-margin-bottom-large:10px;--awb-spacing-left-large:7.68%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                        <div
                            class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
                            <div>
                                <a class="fusion-button button-flat fusion-button-default-size button-custom fusion-button-default button-14 fusion-button-default-span fusion-button-default-type"
                                    style="--button_accent_color:var(--awb-color6);--button_border_color:var(--awb-color6);--button_accent_hover_color:var(--awb-color6);--button_border_hover_color:var(--awb-color6);--button-border-radius-top-left:0;--button-border-radius-top-right:0;--button-border-radius-bottom-right:0;--button-border-radius-bottom-left:0;--button_gradient_top_color:rgba(252,252,252,0);--button_gradient_bottom_color:rgba(252,252,252,0);--button_gradient_top_color_hover:rgba(252,252,252,0);--button_gradient_bottom_color_hover:rgba(252,252,252,0);--button_text_transform:capitalize;--button_font_size:16px;--button_padding-left:0px;--button_typography-font-family:"
                                    Roboto";--button_typography-font-style:normal;--button_typography-font-weight:500;"
                                    target="_self" data-hover="underline"
                                    href="https://www.mymealcatering.com/cara-pesan-catering">
                                    <span class="fusion-button-text">cara pesan
                                        catering</span></a>
                            </div>
                            <div>
                                <a class="fusion-button button-flat fusion-button-default-size button-custom fusion-button-default button-15 fusion-button-default-span fusion-button-default-type"
                                    style="--button_accent_color:var(--awb-color6);--button_border_color:var(--awb-color6);--button_accent_hover_color:var(--awb-color6);--button_border_hover_color:var(--awb-color6);--button-border-radius-top-left:0;--button-border-radius-top-right:0;--button-border-radius-bottom-right:0;--button-border-radius-bottom-left:0;--button_gradient_top_color:rgba(252,252,252,0);--button_gradient_bottom_color:rgba(252,252,252,0);--button_gradient_top_color_hover:rgba(252,252,252,0);--button_gradient_bottom_color_hover:rgba(252,252,252,0);--button_text_transform:capitalize;--button_font_size:16px;--button_padding-left:0px;--button_typography-font-family:"
                                    Roboto";--button_typography-font-style:normal;--button_typography-font-weight:500;"
                                    target="_self" data-hover="underline"
                                    href="https://www.mymealcatering.com/faq/area-pengantaran">
                                    <span class="fusion-button-text">area
                                        pengiriman</span></a>
                            </div>
                            <div>
                                <a class="fusion-button button-flat fusion-button-default-size button-custom fusion-button-default button-16 fusion-button-default-span fusion-button-default-type"
                                    style="--button_accent_color:var(--awb-color6);--button_border_color:var(--awb-color6);--button_accent_hover_color:var(--awb-color6);--button_border_hover_color:var(--awb-color6);--button-border-radius-top-left:0;--button-border-radius-top-right:0;--button-border-radius-bottom-right:0;--button-border-radius-bottom-left:0;--button_gradient_top_color:rgba(252,252,252,0);--button_gradient_bottom_color:rgba(252,252,252,0);--button_gradient_top_color_hover:rgba(252,252,252,0);--button_gradient_bottom_color_hover:rgba(252,252,252,0);--button_text_transform:capitalize;--button_font_size:16px;--button_padding-left:0px;--button_typography-font-family:"
                                    Roboto";--button_typography-font-style:normal;--button_typography-font-weight:500;"
                                    target="_self" data-hover="underline"
                                    href="https://www.mymealcatering.com/catering-perusahaan">
                                    <span class="fusion-button-text">corporate
                                        catering (B2B)</span></a>
                            </div>
                            <div>
                                <a class="fusion-button button-flat fusion-button-default-size button-custom fusion-button-default button-17 fusion-button-default-span fusion-button-default-type"
                                    style="--button_accent_color:var(--awb-color6);--button_border_color:var(--awb-color6);--button_accent_hover_color:var(--awb-color6);--button_border_hover_color:var(--awb-color6);--button-border-radius-top-left:0;--button-border-radius-top-right:0;--button-border-radius-bottom-right:0;--button-border-radius-bottom-left:0;--button_gradient_top_color:rgba(252,252,252,0);--button_gradient_bottom_color:rgba(252,252,252,0);--button_gradient_top_color_hover:rgba(252,252,252,0);--button_gradient_bottom_color_hover:rgba(252,252,252,0);--button_text_transform:capitalize;--button_font_size:16px;--button_padding-left:0px;--button_typography-font-family:"
                                    Roboto";--button_typography-font-style:normal;--button_typography-font-weight:500;"
                                    target="_self" data-hover="underline"
                                    href="https://www.mymealcatering.com/terms-conditions">
                                    <span class="fusion-button-text">syarat &
                                        ketentuan</span></a>
                            </div>
                            <div>
                                <a class="fusion-button button-flat fusion-button-default-size button-custom fusion-button-default button-18 fusion-button-default-span fusion-button-default-type"
                                    style="--button_accent_color:var(--awb-color6);--button_border_color:var(--awb-color6);--button_accent_hover_color:var(--awb-color6);--button_border_hover_color:var(--awb-color6);--button-border-radius-top-left:0;--button-border-radius-top-right:0;--button-border-radius-bottom-right:0;--button-border-radius-bottom-left:0;--button_gradient_top_color:rgba(252,252,252,0);--button_gradient_bottom_color:rgba(252,252,252,0);--button_gradient_top_color_hover:rgba(252,252,252,0);--button_gradient_bottom_color_hover:rgba(252,252,252,0);--button_text_transform:capitalize;--button_font_size:16px;--button_padding-left:0px;--button_typography-font-family:"
                                    Roboto";--button_typography-font-style:normal;--button_typography-font-weight:500;"
                                    target="_self" data-hover="underline"
                                    href="https://www.mymealcatering.com/testimonial"><span class="fusion-button-text">
                                        testimoni</span></a>
                            </div>
                            <div>
                                <a class="fusion-button button-flat fusion-button-default-size button-custom fusion-button-default button-19 fusion-button-default-span fusion-button-default-type"
                                    style="--button_accent_color:var(--awb-color6);--button_border_color:var(--awb-color6);--button_accent_hover_color:var(--awb-color6);--button_border_hover_color:var(--awb-color6);--button-border-radius-top-left:0;--button-border-radius-top-right:0;--button-border-radius-bottom-right:0;--button-border-radius-bottom-left:0;--button_gradient_top_color:rgba(252,252,252,0);--button_gradient_bottom_color:rgba(252,252,252,0);--button_gradient_top_color_hover:rgba(252,252,252,0);--button_gradient_bottom_color_hover:rgba(252,252,252,0);--button_text_transform:capitalize;--button_font_size:16px;--button_padding-left:0px;--button_typography-font-family:"
                                    Roboto";--button_typography-font-style:normal;--button_typography-font-weight:500;"
                                    target="_self" data-hover="underline"
                                    href="https://www.mymealcatering.com/karir"><span class="fusion-button-text">
                                        karir</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="fusion-layout-column fusion_builder_column fusion-builder-column-43 fusion_builder_column_1_4 1_4 fusion-flex-column fusion-flex-align-self-stretch"
                        style="--awb-bg-size:cover;--awb-width-large:25%;--awb-margin-top-large:10px;--awb-spacing-right-large:7.68%;--awb-margin-bottom-large:10px;--awb-spacing-left-large:7.68%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                        <div
                            class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
                            <div>
                                <a class="fusion-button button-flat fusion-button-default-size button-custom fusion-button-default button-20 fusion-button-default-span fusion-button-default-type"
                                    style="--button_accent_color:var(--awb-color6);--button_border_color:var(--awb-color6);--button_accent_hover_color:var(--awb-color6);--button_border_hover_color:var(--awb-color6);--button-border-radius-top-left:0;--button-border-radius-top-right:0;--button-border-radius-bottom-right:0;--button-border-radius-bottom-left:0;--button_gradient_top_color:rgba(252,252,252,0);--button_gradient_bottom_color:rgba(252,252,252,0);--button_gradient_top_color_hover:rgba(252,252,252,0);--button_gradient_bottom_color_hover:rgba(252,252,252,0);--button_text_transform:capitalize;--button_font_size:16px;--button_padding-left:0px;--button_typography-font-family:"
                                    Roboto";--button_typography-font-style:normal;--button_typography-font-weight:500;"
                                    target="_self" data-hover="underline"
                                    href="https://www.mymealcatering.com/about"><span class="fusion-button-text">
                                        Tentang Kami</span></a>
                            </div>
                            <div>
                                <a class="fusion-button button-flat fusion-button-default-size button-custom fusion-button-default button-21 fusion-button-default-span fusion-button-default-type"
                                    style="--button_accent_color:var(--awb-color6);--button_border_color:var(--awb-color6);--button_accent_hover_color:var(--awb-color6);--button_border_hover_color:var(--awb-color6);--button-border-radius-top-left:0;--button-border-radius-top-right:0;--button-border-radius-bottom-right:0;--button-border-radius-bottom-left:0;--button_gradient_top_color:rgba(252,252,252,0);--button_gradient_bottom_color:rgba(252,252,252,0);--button_gradient_top_color_hover:rgba(252,252,252,0);--button_gradient_bottom_color_hover:rgba(252,252,252,0);--button_text_transform:capitalize;--button_font_size:16px;--button_padding-left:0px;--button_typography-font-family:"
                                    Roboto";--button_typography-font-style:normal;--button_typography-font-weight:500;"
                                    target="_self" data-hover="underline"
                                    href="https://www.mymealcatering.com/about/mengapa-langganan-mymeal">
                                    <span class="fusion-button-text">keunggulan
                                        MyMeal</span></a>
                            </div>
                            <div>
                                <a class="fusion-button button-flat fusion-button-default-size button-custom fusion-button-default button-22 fusion-button-default-span fusion-button-default-type"
                                    style="--button_accent_color:var(--awb-color6);--button_border_color:var(--awb-color6);--button_accent_hover_color:var(--awb-color6);--button_border_hover_color:var(--awb-color6);--button-border-radius-top-left:0;--button-border-radius-top-right:0;--button-border-radius-bottom-right:0;--button-border-radius-bottom-left:0;--button_gradient_top_color:rgba(252,252,252,0);--button_gradient_bottom_color:rgba(252,252,252,0);--button_gradient_top_color_hover:rgba(252,252,252,0);--button_gradient_bottom_color_hover:rgba(252,252,252,0);--button_text_transform:capitalize;--button_font_size:16px;--button_padding-left:0px;--button_typography-font-family:"
                                    Roboto";--button_typography-font-style:normal;--button_typography-font-weight:500;"
                                    target="_self" data-hover="underline"
                                    href="https://www.mymealcatering.com/hubungi-kami"><span class="fusion-button-text">
                                        Partnership</span></a>
                            </div>
                            <div>
                                <a class="fusion-button button-flat fusion-button-default-size button-custom fusion-button-default button-23 fusion-button-default-span fusion-button-default-type"
                                    style="--button_accent_color:var(--awb-color6);--button_border_color:var(--awb-color6);--button_accent_hover_color:var(--awb-color6);--button_border_hover_color:var(--awb-color6);--button-border-radius-top-left:0;--button-border-radius-top-right:0;--button-border-radius-bottom-right:0;--button-border-radius-bottom-left:0;--button_gradient_top_color:rgba(252,252,252,0);--button_gradient_bottom_color:rgba(252,252,252,0);--button_gradient_top_color_hover:rgba(252,252,252,0);--button_gradient_bottom_color_hover:rgba(252,252,252,0);--button_text_transform:capitalize;--button_font_size:16px;--button_padding-left:0px;--button_typography-font-family:"
                                    Roboto";--button_typography-font-style:normal;--button_typography-font-weight:500;"
                                    target="_self" data-hover="underline"
                                    href="https://www.mymealcatering.com/faq"><span class="fusion-button-text">
                                        FAQ</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="fusion-layout-column fusion_builder_column fusion-builder-column-44 fusion_builder_column_1_1 1_1 fusion-flex-column"
                        style="--awb-bg-size:cover;--awb-width-large:100%;--awb-margin-top-large:10px;--awb-spacing-right-large:1.92%;--awb-margin-bottom-large:10px;--awb-spacing-left-large:1.92%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                        <div
                            class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
                            <div class="fusion-separator fusion-full-width-sep"
                                style="align-self: center;margin-left: auto;margin-right: auto;width:100%;">
                                <div class="fusion-separator-border sep-single sep-solid"
                                    style="--awb-height:20px;--awb-amount:20px;--awb-sep-color:var(--awb-color6);border-color:var(--awb-color6);border-top-width:1px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fusion-layout-column fusion_builder_column fusion-builder-column-45 fusion_builder_column_1_2 1_2 fusion-flex-column"
                        style="--awb-bg-size:cover;--awb-width-large:50%;--awb-margin-top-large:10px;--awb-spacing-right-large:3.84%;--awb-margin-bottom-large:10px;--awb-spacing-left-large:3.84%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                        <div
                            class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
                            <div class="fusion-text fusion-text-34" style="--awb-font-size:13px;">
                                <p>© 2023 CV. Sehat Makmur Abadi (MyMeal
                                    Catering)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div><a class="fusion-one-page-text-link fusion-page-load-link" tabindex="-1" href="#" aria-hidden="true">Page load
        link</a>
    <div class="avada-footer-scripts">
        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
            style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-dark-grayscale">
                    <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                        values=".299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0">
                    </fecolormatrix>
                    <fecomponenttransfer color-interpolation-filters="sRGB">
                        <fefuncr type="table" tablevalues="0 0.49803921568627"></fefuncr>
                        <fefuncg type="table" tablevalues="0 0.49803921568627"></fefuncg>
                        <fefuncb type="table" tablevalues="0 0.49803921568627"></fefuncb>
                        <fefunca type="table" tablevalues="1 1"></fefunca>
                    </fecomponenttransfer>
                    <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
                </filter>
            </defs>
        </svg> <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false"
            role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-grayscale">
                    <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                        values=".299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0">
                    </fecolormatrix>
                    <fecomponenttransfer color-interpolation-filters="sRGB">
                        <fefuncr type="table" tablevalues="0 1"></fefuncr>
                        <fefuncg type="table" tablevalues="0 1"></fefuncg>
                        <fefuncb type="table" tablevalues="0 1"></fefuncb>
                        <fefunca type="table" tablevalues="1 1"></fefunca>
                    </fecomponenttransfer>
                    <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
                </filter>
            </defs>
        </svg> <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false"
            role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-purple-yellow">
                    <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                        values=".299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0">
                    </fecolormatrix>
                    <fecomponenttransfer color-interpolation-filters="sRGB">
                        <fefuncr type="table" tablevalues="0.54901960784314 0.98823529411765"></fefuncr>
                        <fefuncg type="table" tablevalues="0 1"></fefuncg>
                        <fefuncb type="table" tablevalues="0.71764705882353 0.25490196078431"></fefuncb>
                        <fefunca type="table" tablevalues="1 1"></fefunca>
                    </fecomponenttransfer>
                    <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
                </filter>
            </defs>
        </svg> <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false"
            role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-blue-red">
                    <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                        values=".299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0">
                    </fecolormatrix>
                    <fecomponenttransfer color-interpolation-filters="sRGB">
                        <fefuncr type="table" tablevalues="0 1"></fefuncr>
                        <fefuncg type="table" tablevalues="0 0.27843137254902"></fefuncg>
                        <fefuncb type="table" tablevalues="0.5921568627451 0.27843137254902"></fefuncb>
                        <fefunca type="table" tablevalues="1 1"></fefunca>
                    </fecomponenttransfer>
                    <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
                </filter>
            </defs>
        </svg> <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false"
            role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-midnight">
                    <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                        values=".299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0">
                    </fecolormatrix>
                    <fecomponenttransfer color-interpolation-filters="sRGB">
                        <fefuncr type="table" tablevalues="0 0"></fefuncr>
                        <fefuncg type="table" tablevalues="0 0.64705882352941"></fefuncg>
                        <fefuncb type="table" tablevalues="0 1"></fefuncb>
                        <fefunca type="table" tablevalues="1 1"></fefunca>
                    </fecomponenttransfer>
                    <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
                </filter>
            </defs>
        </svg> <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false"
            role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-magenta-yellow">
                    <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                        values=".299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0">
                    </fecolormatrix>
                    <fecomponenttransfer color-interpolation-filters="sRGB">
                        <fefuncr type="table" tablevalues="0.78039215686275 1"></fefuncr>
                        <fefuncg type="table" tablevalues="0 0.94901960784314"></fefuncg>
                        <fefuncb type="table" tablevalues="0.35294117647059 0.47058823529412"></fefuncb>
                        <fefunca type="table" tablevalues="1 1"></fefunca>
                    </fecomponenttransfer>
                    <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
                </filter>
            </defs>
        </svg> <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false"
            role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-purple-green">
                    <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                        values=".299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0">
                    </fecolormatrix>
                    <fecomponenttransfer color-interpolation-filters="sRGB">
                        <fefuncr type="table" tablevalues="0.65098039215686 0.40392156862745"></fefuncr>
                        <fefuncg type="table" tablevalues="0 1"></fefuncg>
                        <fefuncb type="table" tablevalues="0.44705882352941 0.4"></fefuncb>
                        <fefunca type="table" tablevalues="1 1"></fefunca>
                    </fecomponenttransfer>
                    <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
                </filter>
            </defs>
        </svg> <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false"
            role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-blue-orange">
                    <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                        values=".299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0">
                    </fecolormatrix>
                    <fecomponenttransfer color-interpolation-filters="sRGB">
                        <fefuncr type="table" tablevalues="0.098039215686275 1"></fefuncr>
                        <fefuncg type="table" tablevalues="0 0.66274509803922"></fefuncg>
                        <fefuncb type="table" tablevalues="0.84705882352941 0.41960784313725"></fefuncb>
                        <fefunca type="table" tablevalues="1 1"></fefunca>
                    </fecomponenttransfer>
                    <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
                </filter>
            </defs>
        </svg>
        <script type="litespeed/javascript">
    var fusionNavIsCollapsed=function(e){var t,n;window.innerWidth<=e.getAttribute("data-breakpoint")?(e.classList.add("collapse-enabled"),e.classList.remove("awb-menu_desktop"),e.classList.contains("expanded")||(e.setAttribute("aria-expanded","false"),window.dispatchEvent(new Event("fusion-mobile-menu-collapsed",{bubbles:!0,cancelable:!0}))),(n=e.querySelectorAll(".menu-item-has-children.expanded")).length&&n.forEach(function(e){e.querySelector(".awb-menu__open-nav-submenu_mobile").setAttribute("aria-expanded","false")})):(null!==e.querySelector(".menu-item-has-children.expanded .awb-menu__open-nav-submenu_click")&&e.querySelector(".menu-item-has-children.expanded .awb-menu__open-nav-submenu_click").click(),e.classList.remove("collapse-enabled"),e.classList.add("awb-menu_desktop"),e.setAttribute("aria-expanded","true"),null!==e.querySelector(".awb-menu__main-ul")&&e.querySelector(".awb-menu__main-ul").removeAttribute("style")),e.classList.add("no-wrapper-transition"),clearTimeout(t),t=setTimeout(()=>{e.classList.remove("no-wrapper-transition")},400),e.classList.remove("loading")},fusionRunNavIsCollapsed=function(){var e,t=document.querySelectorAll(".awb-menu");for(e=0;e<t.length;e++)fusionNavIsCollapsed(t[e])};function avadaGetScrollBarWidth(){var e,t,n,l=document.createElement("p");return l.style.width="100%",l.style.height="200px",(e=document.createElement("div")).style.position="absolute",e.style.top="0px",e.style.left="0px",e.style.visibility="hidden",e.style.width="200px",e.style.height="150px",e.style.overflow="hidden",e.appendChild(l),document.body.appendChild(e),t=l.offsetWidth,e.style.overflow="scroll",t==(n=l.offsetWidth)&&(n=e.clientWidth),document.body.removeChild(e),jQuery("html").hasClass("awb-scroll")&&10<t-n?10:t-n}fusionRunNavIsCollapsed(),window.addEventListener("fusion-resize-horizontal",fusionRunNavIsCollapsed)
    </script>
        <div id="qlwapp"
            class="qlwapp qlwapp-premium auto-load qlwapp-bubble qlwapp-bottom-right qlwapp- qlwapp-rounded qlwapp-bounce"
            data-autoloadelay="100">
            <div class="qlwapp-container">
                <div class="qlwapp-box">
                    <div class="qlwapp-header">
                        <div class="qlwapp-carousel">
                            <div class="qlwapp-slide">
                                <i class="qlwapp-close" data-action="close">×</i>
                                <div class="qlwapp-description">
                                    <div class="qlwapp-description-container">
                                        <p style="font-size: 24px;text-align: center">
                                            <strong>Halo!</strong>
                                        </p>
                                        <p style="font-size: 14px;text-align: center">
                                            Silakan pilih ahli gizi sesuai domisili
                                            Anda</p>
                                    </div>
                                </div>
                            </div>
                            <div class="qlwapp-slide">
                                <div class="qlwapp-contact">
                                    <div class="qlwapp-previous" data-action="previous"></div>
                                    <div class="qlwapp-info">
                                        <span class="qlwapp-name">%</span> <span class="qlwapp-label">%</span>
                                    </div>
                                    <div class="qlwapp-avatar">
                                        <div class="qlwapp-avatar-container">
                                            <img data-lazyloaded="1"
                                                src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                alt="#" data-src="#">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qlwapp-body">
                        <div class="qlwapp-carousel">
                            <div class="qlwapp-slide">
                                <a class="qlwapp-account qlwapp-all" data-action="chat" data-visibility="readonly"
                                    data-timefrom="05:00" data-timeto="22:00" data-phone="628119055600"
                                    data-timedays="[" 0","1","2","3","4","5","6"]" data-timezone="420"
                                    data-message="Halo, saya Agung ahli gizi di MyMeal Catering siap membantu Anda!"
                                    data-type="phone" role="button" tabindex="0" target="_blank">
                                    <div class="qlwapp-avatar">
                                        <div class="qlwapp-avatar-container">
                                            <img data-lazyloaded="1"
                                                src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MCIgaGVpZ2h0PSIxNjkiIHZpZXdCb3g9IjAgMCA1MCAxNjkiPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHN0eWxlPSJmaWxsOiNjZmQ0ZGI7ZmlsbC1vcGFjaXR5OiAwLjE7Ii8+PC9zdmc+"
                                                width="50" height="169" alt="Agung "
                                                data-src="https://www.mymealcatering.com/wp-content/uploads/Mens-Doctor-Cartoon.webp">
                                        </div>
                                    </div>
                                    <div class="qlwapp-info">
                                        <span class="qlwapp-label">Jakarta (Pusat, Timur,
                                            Selatan) | Tangerang</span> <span class="qlwapp-name">Agung</span> <span
                                            class="qlwapp-time">Available from <span class="from">05:00</span> to <span
                                                class="to">22:00</span></span> <span
                                            class="qlwapp-days qlwapp-hidden">Available on
                                            <span class="day0">Sunday</span><span class="day1">Monday</span><span
                                                class="day2">Tuesday</span><span class="day3">Wednesday</span><span
                                                class="day4">Thursday</span><span class="day5">Friday</span><span
                                                class="day6">Saturday</span></span>
                                    </div>
                                </a> <a class="qlwapp-account qlwapp-all" data-action="chat" data-visibility="readonly"
                                    data-timefrom="05:00" data-timeto="22:00" data-phone="628119055900"
                                    data-timedays="[" 0","1","2","3","4","5","6"]" data-timezone="420"
                                    data-message="Halo, saya Layla ahli gizi di MyMeal Catering siap membantu Anda!"
                                    data-type="phone" role="button" tabindex="0" target="_blank">
                                    <div class="qlwapp-avatar">
                                        <div class="qlwapp-avatar-container">
                                            <img data-lazyloaded="1"
                                                src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MCIgaGVpZ2h0PSIxNjkiIHZpZXdCb3g9IjAgMCA1MCAxNjkiPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHN0eWxlPSJmaWxsOiNjZmQ0ZGI7ZmlsbC1vcGFjaXR5OiAwLjE7Ii8+PC9zdmc+"
                                                width="50" height="169" alt="Layla "
                                                data-src="https://www.mymealcatering.com/wp-content/uploads/Womens-Doctor-Cartoon.webp">
                                        </div>
                                    </div>
                                    <div class="qlwapp-info">
                                        <span class="qlwapp-label">Jakarta (Barat, Pusat,
                                            Selatan) | Bekasi</span> <span class="qlwapp-name">Layla</span> <span
                                            class="qlwapp-time">Available from <span class="from">05:00</span> to <span
                                                class="to">22:00</span></span> <span
                                            class="qlwapp-days qlwapp-hidden">Available on
                                            <span class="day0">Sunday</span><span class="day1">Monday</span><span
                                                class="day2">Tuesday</span><span class="day3">Wednesday</span><span
                                                class="day4">Thursday</span><span class="day5">Friday</span><span
                                                class="day6">Saturday</span></span>
                                    </div>
                                </a> <a class="qlwapp-account qlwapp-all" data-action="chat" data-visibility="readonly"
                                    data-timefrom="05:00" data-timeto="22:00" data-phone="628118063700"
                                    data-timedays="[" 0","1","2","3","4","5","6"]" data-timezone="420"
                                    data-message="Halo, saya Fira ahli gizi di MyMeal Catering siap membantu Anda!"
                                    data-type="phone" role="button" tabindex="0" target="_blank">
                                    <div class="qlwapp-avatar">
                                        <div class="qlwapp-avatar-container">
                                            <img data-lazyloaded="1"
                                                src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MCIgaGVpZ2h0PSIxNjkiIHZpZXdCb3g9IjAgMCA1MCAxNjkiPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHN0eWxlPSJmaWxsOiNjZmQ0ZGI7ZmlsbC1vcGFjaXR5OiAwLjE7Ii8+PC9zdmc+"
                                                width="50" height="169" alt="Fira "
                                                data-src="https://www.mymealcatering.com/wp-content/uploads/Womens-Doctor-Cartoon.webp">
                                        </div>
                                    </div>
                                    <div class="qlwapp-info">
                                        <span class="qlwapp-label">Jakarta (Utara, Barat)
                                            | Depok | Tangerang</span> <span class="qlwapp-name">Fira</span> <span
                                            class="qlwapp-time">Available from <span class="from">05:00</span> to <span
                                                class="to">22:00</span></span> <span
                                            class="qlwapp-days qlwapp-hidden">Available on
                                            <span class="day0">Sunday</span><span class="day1">Monday</span><span
                                                class="day2">Tuesday</span><span class="day3">Wednesday</span><span
                                                class="day4">Thursday</span><span class="day5">Friday</span><span
                                                class="day6">Saturday</span></span>
                                    </div>
                                </a> <a class="qlwapp-account qlwapp-all" data-action="chat" data-visibility="readonly"
                                    data-timefrom="05:00" data-timeto="22:00" data-phone="628112355900"
                                    data-timedays="[" 0","1","2","3","4","5","6"]" data-timezone="420"
                                    data-message="Halo, saya Nata ahli gizi di MyMeal Catering siap membantu Anda!"
                                    data-type="phone" role="button" tabindex="0" target="_blank">
                                    <div class="qlwapp-avatar">
                                        <div class="qlwapp-avatar-container">
                                            <img data-lazyloaded="1"
                                                src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MCIgaGVpZ2h0PSIxNjkiIHZpZXdCb3g9IjAgMCA1MCAxNjkiPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHN0eWxlPSJmaWxsOiNjZmQ0ZGI7ZmlsbC1vcGFjaXR5OiAwLjE7Ii8+PC9zdmc+"
                                                width="50" height="169" alt="Nata "
                                                data-src="https://www.mymealcatering.com/wp-content/uploads/Womens-Doctor-Cartoon.webp">
                                        </div>
                                    </div>
                                    <div class="qlwapp-info">
                                        <span class="qlwapp-label">Bandung |
                                            Cimahi</span> <span class="qlwapp-name">Nata</span> <span
                                            class="qlwapp-time">Available from <span class="from">05:00</span> to <span
                                                class="to">22:00</span></span> <span
                                            class="qlwapp-days qlwapp-hidden">Available on
                                            <span class="day0">Sunday</span><span class="day1">Monday</span><span
                                                class="day2">Tuesday</span><span class="day3">Wednesday</span><span
                                                class="day4">Thursday</span><span class="day5">Friday</span><span
                                                class="day6">Saturday</span></span>
                                    </div>
                                </a> <a class="qlwapp-account qlwapp-all" data-action="chat" data-visibility="readonly"
                                    data-timefrom="00:00" data-timeto="00:00" data-phone="628119055900"
                                    data-timedays="[]" data-timezone="420"
                                    data-message="Halo, saya mau tanya tentang jasa MyMeal untuk catering rumah sakit/sekolah/karyawan kami"
                                    data-type="phone" role="button" tabindex="0" target="_blank">
                                    <div class="qlwapp-avatar">
                                        <div class="qlwapp-avatar-container">
                                            <img data-lazyloaded="1"
                                                src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MCIgaGVpZ2h0PSIxNjkiIHZpZXdCb3g9IjAgMCA1MCAxNjkiPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHN0eWxlPSJmaWxsOiNjZmQ0ZGI7ZmlsbC1vcGFjaXR5OiAwLjE7Ii8+PC9zdmc+"
                                                width="50" height="169" alt="Jimmy "
                                                data-src="https://www.mymealcatering.com/wp-content/uploads/Mens-Doctor-Cartoon.webp">
                                        </div>
                                    </div>
                                    <div class="qlwapp-info">
                                        <span class="qlwapp-label">Corporate Catering
                                            (B2B)</span> <span class="qlwapp-name">Jimmy</span>
                                    </div>
                                </a>
                            </div>
                            <div class="qlwapp-slide">
                                <div class="qlwapp-chat">
                                    <div class="qlwapp-message"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qlwapp-footer" data-data-visibility="">
                        <p style="text-align: center">MyMeal Catering</p>
                    </div>
                    <div class="qlwapp-response" data-action="response">
                        <textarea maxlength="500" name="message" placeholder="Tulis umpan balik"
                            aria-label="Tulis umpan balik" tabindex="0"></textarea>
                        <div class="qlwapp-buttons">
                            <a class="qlwapp-reply" data-action="open"
                                data-message="Halo, saya dari website dan mau pesan catering di MyMeal. Mohon dibantu pemesanannya, terima kasih!"
                                role="button" tabindex="0" target="_blank"></a>
                        </div>
                    </div>
                </div><a class="qlwapp-toggle" data-action="box" data-visibility="readonly" data-type="phone"
                    data-timefrom="" data-timedays="[" 0","1","2","3","4","5","6"]" data-timeto=""
                    data-phone="628119055900" data-timezone="420"
                    data-message="Halo, saya dari website dan mau pesan catering di MyMeal. Mohon dibantu pemesanannya, terima kasih!"
                    role="button" tabindex="0" target="_blank"> <i class="qlwapp-close" data-action="close">×</i> <span
                        class="qlwapp-days qlwapp-hidden">Available on <span class="day0">Sunday</span><span
                            class="day1">Monday</span><span class="day2">Tuesday</span><span
                            class="day3">Wednesday</span><span class="day4">Thursday</span><span
                            class="day5">Friday</span><span class="day6">Saturday</span></span></a>
            </div>
        </div>
        <script type="litespeed/javascript">
    (function(){var c=document.body.className;c=c.replace(/woocommerce-no-js/,'woocommerce-js');document.body.className=c})()
    </script>
        <script type="litespeed/javascript" data-src='https://www.mymealcatering.com/wp-includes/js/jquery/jquery.js'
            id='jquery-core-js'></script>
        <script id='woocommerce-js-extra' type="litespeed/javascript">
    var woocommerce_params={"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"}
    </script>
        <script id='wp-util-js-extra' type="litespeed/javascript">
    var _wpUtilSettings={"ajax":{"url":"\/wp-admin\/admin-ajax.php"}}
    </script>
        <script id='wc-add-to-cart-variation-js-extra' type="litespeed/javascript">
    var wc_add_to_cart_variation_params={"wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_no_matching_variations_text":"Sorry, no products matched your selection. Please choose a different combination.","i18n_make_a_selection_text":"Please select some product options before adding this product to your cart.","i18n_unavailable_text":"Sorry, this product is unavailable. Please choose a different combination."}
    </script>
        <script type="application/ld+json">
    {"@context":"https:\/\/schema.org","@type":["WebPage","FAQPage"],"mainEntity":[{"@type":"Question","name":"Cek kesehatan apa saja yang akan saya dapatkan?","acceptedAnswer":{"@type":"Answer","text":"<div class=\"fusion-fullwidth fullwidth-box fusion-builder-row-9-1 fusion-flex-container nonhundred-percent-fullwidth non-hundred-percent-height-scrolling\" style=\"--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-flex-wrap:wrap;\" ><div class=\"fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap\" style=\"width:104% !important;max-width:104% !important;margin-left: calc(-4% \/ 2 );margin-right: calc(-4% \/ 2 );\"><div class=\"fusion-layout-column fusion_builder_column fusion-builder-column-30 fusion_builder_column_1_1 1_1 fusion-flex-column\" style=\"--awb-bg-size:cover;--awb-width-large:100%;--awb-margin-top-large:10px;--awb-spacing-right-large:1.92%;--awb-margin-bottom-large:10px;--awb-spacing-left-large:1.92%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;\"><div class=\"fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column\"><div class=\"fusion-text fusion-text-24\"><p>Pemeriksaan kesehatan yang dilakukan antara lain:<\/p>\n<ul>\n<li>Kolesterol<\/li>\n<li>Gula darah<\/li>\n<li>Asam urat<\/li>\n<li>Kadar garam<\/li>\n<li>BMI<\/li>\n<li>Kadar lemak<\/li>\n<li>Protein<\/li>\n<li>Mineral<\/li>\n<li>Massa otot<\/li>\n<li>Tensi<\/li>\n<\/ul>\n<p>Ketika ahli gizi MyMeal berkunjung, manfaatkan untuk konsultasi langsung dan sampaikan permintaan serta masukan untuk kami demi keberhasilan diet Anda.<\/p>\n<\/div><\/div><\/div><\/div><\/div>\n"}},{"@type":"Question","name":"Kapan makanan akan diantarkan?","acceptedAnswer":{"@type":"Answer","text":"<div class=\"fusion-fullwidth fullwidth-box fusion-builder-row-9-2 fusion-flex-container nonhundred-percent-fullwidth non-hundred-percent-height-scrolling\" style=\"--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-flex-wrap:wrap;\" ><div class=\"fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap\" style=\"width:104% !important;max-width:104% !important;margin-left: calc(-4% \/ 2 );margin-right: calc(-4% \/ 2 );\"><div class=\"fusion-layout-column fusion_builder_column fusion-builder-column-31 fusion_builder_column_1_1 1_1 fusion-flex-column\" style=\"--awb-bg-size:cover;--awb-width-large:100%;--awb-margin-top-large:0px;--awb-spacing-right-large:1.92%;--awb-margin-bottom-large:0px;--awb-spacing-left-large:1.92%;--awb-width-medium:100%;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;\"><div class=\"fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column\"><div class=\"fusion-text fusion-text-25\"><p>Catering bisa dimulai H+2 setelah pembayaran Anda selesai dikonfirmasi.<\/p>\n<p>Untuk jadwal pengiriman makanan adalah sebagai berikut:<\/p>\n<ul>\n<li>Sarapan mulai 06.30 – 08.30 pagi<\/li>\n<li>Makan Siang mulai 10.30 – 12.00 siang<\/li>\n<li>Makan Malam mulai 16.00 – 18.30 sore<\/li>\n<\/ul>\n<\/div><\/div><\/div><\/div><\/div>\n"}},{"@type":"Question","name":"Bagaimana cara mengetahui lemak saya turun?","acceptedAnswer":{"@type":"Answer","text":"<div class=\"fusion-fullwidth fullwidth-box fusion-builder-row-9-3 fusion-flex-container nonhundred-percent-fullwidth non-hundred-percent-height-scrolling\" style=\"--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-flex-wrap:wrap;\" ><div class=\"fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap\" style=\"width:104% !important;max-width:104% !important;margin-left: calc(-4% \/ 2 );margin-right: calc(-4% \/ 2 );\"><div class=\"fusion-layout-column fusion_builder_column fusion-builder-column-32 fusion_builder_column_1_1 1_1 fusion-flex-column\" style=\"--awb-bg-size:cover;--awb-width-large:100%;--awb-margin-top-large:0px;--awb-spacing-right-large:1.92%;--awb-margin-bottom-large:0px;--awb-spacing-left-large:1.92%;--awb-width-medium:100%;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;\"><div class=\"fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column\"><div class=\"fusion-text fusion-text-26\"><p>Selama menjalani program diet dengan MyMeal, Anda berkesempatan dikunjungi ahli gizi untuk melakukan cek<em> body composition<\/em> dan cek kesehatan lainnya.<\/p>\n<p>Saat kuunjungan ini Anda akan diperiksa bagaimana komposisi lemak, protein, dan kadar air dalam tubuh Anda untuk mengukur keberhasilan diet. Untuk cek <em>body composition<\/em> ini aman dan tanpa jarum suntik, kaki dan tangan hanya akan ditempeli stiker, bahkan aman untuk ibu hamil.<\/p>\n<\/div><\/div><\/div><\/div><\/div>\n"}},{"@type":"Question","name":"Bagaimana mekanisme garansi penurunan berat badan?","acceptedAnswer":{"@type":"Answer","text":"<div class=\"fusion-fullwidth fullwidth-box fusion-builder-row-9-4 fusion-flex-container nonhundred-percent-fullwidth non-hundred-percent-height-scrolling\" style=\"--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-flex-wrap:wrap;\" ><div class=\"fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap\" style=\"width:104% !important;max-width:104% !important;margin-left: calc(-4% \/ 2 );margin-right: calc(-4% \/ 2 );\"><div class=\"fusion-layout-column fusion_builder_column fusion-builder-column-33 fusion_builder_column_1_1 1_1 fusion-flex-column\" style=\"--awb-bg-size:cover;--awb-width-large:100%;--awb-margin-top-large:0px;--awb-spacing-right-large:1.92%;--awb-margin-bottom-large:0px;--awb-spacing-left-large:1.92%;--awb-width-medium:100%;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;\"><div class=\"fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column\"><div class=\"fusion-text fusion-text-27\"><p>Garansi dapat kami berikan jika selama Anda berlangganan catering di MyMeal, <strong>dan tidak ada satu hari pun <em>day off<\/em><\/strong>, Anda tidak mengalami penurunan berat badan.<\/p>\n<p>Untuk info lebih lengkap, Anda dapat menghubungi Customer Relation Officer kami atau <a href=\"https:\/\/www.mymealcatering.com\/promo\/garansi-turun-berat-badan.html\">klik disini untuk membaca ketentuan garansi<\/a>.<\/p>\n<\/div><\/div><\/div><\/div><\/div>\n"}},{"@type":"Question","name":"Minggu ini kami ke luar kota, bisakah off catering untuk sementara waktu?","acceptedAnswer":{"@type":"Answer","text":"<div class=\"fusion-fullwidth fullwidth-box fusion-builder-row-9-5 fusion-flex-container nonhundred-percent-fullwidth non-hundred-percent-height-scrolling\" style=\"--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-flex-wrap:wrap;\" ><div class=\"fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap\" style=\"width:104% !important;max-width:104% !important;margin-left: calc(-4% \/ 2 );margin-right: calc(-4% \/ 2 );\"><div class=\"fusion-layout-column fusion_builder_column fusion-builder-column-34 fusion_builder_column_1_1 1_1 fusion-flex-column\" style=\"--awb-bg-size:cover;--awb-width-large:100%;--awb-margin-top-large:0px;--awb-spacing-right-large:1.92%;--awb-margin-bottom-large:0px;--awb-spacing-left-large:1.92%;--awb-width-medium:100%;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;\"><div class=\"fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column\"><div class=\"fusion-text fusion-text-28\"><p>Kami sangat mengerti jika Anda perlu liburan untuk menyegarkan pikiran, untuk itu Anda bisa sampaikan ke Customer Relation kami jika inign off catering sementara waktu.<\/p>\n<p>Permintaan ini dilakukan maksimal H-1 sebelum jadwal off catering, sampaikan pula kapan Anda akan memulai catering kembali.<\/p>\n<\/div><\/div><\/div><\/div><\/div>\n"}},{"@type":"Question","name":"Setelah berhasil diet dan berhenti catering, apakah nanti berat badan akan naik lagi?","acceptedAnswer":{"@type":"Answer","text":"<div class=\"fusion-fullwidth fullwidth-box fusion-builder-row-9-6 fusion-flex-container nonhundred-percent-fullwidth non-hundred-percent-height-scrolling\" style=\"--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-flex-wrap:wrap;\" ><div class=\"fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap\" style=\"width:104% !important;max-width:104% !important;margin-left: calc(-4% \/ 2 );margin-right: calc(-4% \/ 2 );\"><div class=\"fusion-layout-column fusion_builder_column fusion-builder-column-35 fusion_builder_column_1_1 1_1 fusion-flex-column\" style=\"--awb-bg-size:cover;--awb-width-large:100%;--awb-margin-top-large:0px;--awb-spacing-right-large:1.92%;--awb-margin-bottom-large:0px;--awb-spacing-left-large:1.92%;--awb-width-medium:100%;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;\"><div class=\"fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column\"><div class=\"fusion-text fusion-text-29\"><p>Tentu saja tidak.<\/p>\n<p>Salah satu pelanggan MyMeal diet selama 2 bulan dan berhasil turun 14 kg. Lalu dia meneruskan sendiri dietnya dan berhasil turun 3 kg lagi. Setelah 2 tahun, ia mengambil paket katering lagi selama 2 minggu, namun kali ini <strong>bukan paket penurunan berat badan<\/strong> tapi hanya <strong>paket catering makan sehat saja<\/strong>, dan berat badannya tetap stabil.<\/p>\n<p>Pada dasarnya, MyMeal mempermudah program diet Anda, layaknya asisten pribadi\/<i>coach<\/i>\/<i>Personal Trainer<\/i> yang siap membantu target penurunan berat badan Anda, dengan memperkenalkan dan membentuk kebiasaan pola makan yang lebih sehat.<\/p>\n<p>Setelah program selesai, sama halnya seperti program kebugaran fisik yang anda ikuti di klub olahraga manapun, Anda akan selalu dihadapkan pada pilihan: melanjutkan sendiri kebiasaan sehat tersebut (tanpa bantuan siapapun) hingga berat badan tetap ideal, atau tidak.<\/p>\n<\/div><\/div><\/div><\/div><\/div>\n"}},{"@type":"Question","name":"Apakah program diet ini cocok untuk saya?","acceptedAnswer":{"@type":"Answer","text":"<div class=\"fusion-fullwidth fullwidth-box fusion-builder-row-9-7 fusion-flex-container nonhundred-percent-fullwidth non-hundred-percent-height-scrolling\" style=\"--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-flex-wrap:wrap;\" ><div class=\"fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap\" style=\"width:104% !important;max-width:104% !important;margin-left: calc(-4% \/ 2 );margin-right: calc(-4% \/ 2 );\"><div class=\"fusion-layout-column fusion_builder_column fusion-builder-column-36 fusion_builder_column_1_1 1_1 fusion-flex-column\" style=\"--awb-bg-size:cover;--awb-width-large:100%;--awb-margin-top-large:0px;--awb-spacing-right-large:1.92%;--awb-margin-bottom-large:0px;--awb-spacing-left-large:1.92%;--awb-width-medium:100%;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;\"><div class=\"fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column\"><div class=\"fusion-text fusion-text-30\"><p>Anda pasti akan cocok dengan metode diet yang MyMeal sarankan di program ini.<\/p>\n<p>Mengapa?<\/p>\n<p>Karena kami menyediakan metode diet dan siklus menu yang <strong>personalized<\/strong>, semua akan disesuaikan dengan kondisi tubuh Anda, apakah ada kondisi tertentu yang harus diperhatikan (misal asam urat, darah tinggi, diabetes, dll).<\/p>\n<p>Menu makanan akan sesuai dengan kebutuhan kalori Anda sehingga tidak akan membuat Anda kekurangan energi dan mengganggu kegiatan sehari-hari.<\/p>\n<\/div><\/div><\/div><\/div><\/div>\n"}},{"@type":"Question","name":"Bagaimana cara pesan cateringnya?","acceptedAnswer":{"@type":"Answer","text":"<div class=\"fusion-fullwidth fullwidth-box fusion-builder-row-9-8 fusion-flex-container nonhundred-percent-fullwidth non-hundred-percent-height-scrolling\" style=\"--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-flex-wrap:wrap;\" ><div class=\"fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap\" style=\"width:104% !important;max-width:104% !important;margin-left: calc(-4% \/ 2 );margin-right: calc(-4% \/ 2 );\"><div class=\"fusion-layout-column fusion_builder_column fusion-builder-column-37 fusion_builder_column_1_1 1_1 fusion-flex-column\" style=\"--awb-bg-size:cover;--awb-width-large:100%;--awb-margin-top-large:0px;--awb-spacing-right-large:1.92%;--awb-margin-bottom-large:0px;--awb-spacing-left-large:1.92%;--awb-width-medium:100%;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;\"><div class=\"fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column\"><div class=\"fusion-text fusion-text-31\"><p>Anda dianjurkan untuk konsultasi dengan ahli gizi MyMeal dahulu. Konsultasi diperlukan untuk membuat siklus menu yang sesuai dengan tujuan diet Anda.<\/p>\n<p>Bagi ibu hamil atau pantangan medis, Anda bisa melampirkan obat yang sedang dikonsumsi atau catatan dari dokter.<\/p>\n<p><a href=\"https:\/\/www.mymealcatering.com\/order-dan-konsultasi-gratis\">Klik disini untuk menjadwalkan konsultasi gratis<\/a>.<\/p>\n<\/div><\/div><\/div><\/div><\/div>\n"}}]}
    </script> <noscript><iframe data-lazyloaded="1" src="about:blank"
                data-litespeed-src="https://www.googletagmanager.com/ns.html?id=GTM-MGGW443" height="0" width="0"
                style="display:none;visibility:hidden"></iframe></noscript>
    </div>
    <script data-no-optimize="1">
        !function (t, e) { "object" == typeof exports && "undefined" != typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define(e) : (t = "undefined" != typeof globalThis ? globalThis : t || self).LazyLoad = e() }(this, function () { "use strict"; function e() { return (e = Object.assign || function (t) { for (var e = 1; e < arguments.length; e++) { var n, a = arguments[e]; for (n in a) Object.prototype.hasOwnProperty.call(a, n) && (t[n] = a[n]) } return t }).apply(this, arguments) } function i(t) { return e({}, it, t) } function o(t, e) { var n, a = "LazyLoad::Initialized", i = new t(e); try { n = new CustomEvent(a, { detail: { instance: i } }) } catch (t) { (n = document.createEvent("CustomEvent")).initCustomEvent(a, !1, !1, { instance: i }) } window.dispatchEvent(n) } function l(t, e) { return t.getAttribute(gt + e) } function c(t) { return l(t, bt) } function s(t, e) { return function (t, e, n) { e = gt + e; null !== n ? t.setAttribute(e, n) : t.removeAttribute(e) }(t, bt, e) } function r(t) { return s(t, null), 0 } function u(t) { return null === c(t) } function d(t) { return c(t) === vt } function f(t, e, n, a) { t && (void 0 === a ? void 0 === n ? t(e) : t(e, n) : t(e, n, a)) } function _(t, e) { nt ? t.classList.add(e) : t.className += (t.className ? " " : "") + e } function v(t, e) { nt ? t.classList.remove(e) : t.className = t.className.replace(new RegExp("(^|\\s+)" + e + "(\\s+|$)"), " ").replace(/^\s+/, "").replace(/\s+$/, "") } function g(t) { return t.llTempImage } function b(t, e) { !e || (e = e._observer) && e.unobserve(t) } function p(t, e) { t && (t.loadingCount += e) } function h(t, e) { t && (t.toLoadCount = e) } function n(t) { for (var e, n = [], a = 0; e = t.children[a]; a += 1)"SOURCE" === e.tagName && n.push(e); return n } function m(t, e) { (t = t.parentNode) && "PICTURE" === t.tagName && n(t).forEach(e) } function a(t, e) { n(t).forEach(e) } function E(t) { return !!t[st] } function I(t) { return t[st] } function y(t) { return delete t[st] } function A(e, t) { var n; E(e) || (n = {}, t.forEach(function (t) { n[t] = e.getAttribute(t) }), e[st] = n) } function k(a, t) { var i; E(a) && (i = I(a), t.forEach(function (t) { var e, n; e = a, (t = i[n = t]) ? e.setAttribute(n, t) : e.removeAttribute(n) })) } function L(t, e, n) { _(t, e.class_loading), s(t, ut), n && (p(n, 1), f(e.callback_loading, t, n)) } function w(t, e, n) { n && t.setAttribute(e, n) } function x(t, e) { w(t, ct, l(t, e.data_sizes)), w(t, rt, l(t, e.data_srcset)), w(t, ot, l(t, e.data_src)) } function O(t, e, n) { var a = l(t, e.data_bg_multi), i = l(t, e.data_bg_multi_hidpi); (a = at && i ? i : a) && (t.style.backgroundImage = a, n = n, _(t = t, (e = e).class_applied), s(t, ft), n && (e.unobserve_completed && b(t, e), f(e.callback_applied, t, n))) } function N(t, e) { !e || 0 < e.loadingCount || 0 < e.toLoadCount || f(t.callback_finish, e) } function C(t, e, n) { t.addEventListener(e, n), t.llEvLisnrs[e] = n } function M(t) { return !!t.llEvLisnrs } function z(t) { if (M(t)) { var e, n, a = t.llEvLisnrs; for (e in a) { var i = a[e]; n = e, i = i, t.removeEventListener(n, i) } delete t.llEvLisnrs } } function R(t, e, n) { var a; delete t.llTempImage, p(n, -1), (a = n) && --a.toLoadCount, v(t, e.class_loading), e.unobserve_completed && b(t, n) } function T(o, r, c) { var l = g(o) || o; M(l) || function (t, e, n) { M(t) || (t.llEvLisnrs = {}); var a = "VIDEO" === t.tagName ? "loadeddata" : "load"; C(t, a, e), C(t, "error", n) }(l, function (t) { var e, n, a, i; n = r, a = c, i = d(e = o), R(e, n, a), _(e, n.class_loaded), s(e, dt), f(n.callback_loaded, e, a), i || N(n, a), z(l) }, function (t) { var e, n, a, i; n = r, a = c, i = d(e = o), R(e, n, a), _(e, n.class_error), s(e, _t), f(n.callback_error, e, a), i || N(n, a), z(l) }) } function G(t, e, n) { var a, i, o, r, c; t.llTempImage = document.createElement("IMG"), T(t, e, n), E(c = t) || (c[st] = { backgroundImage: c.style.backgroundImage }), o = n, r = l(a = t, (i = e).data_bg), c = l(a, i.data_bg_hidpi), (r = at && c ? c : r) && (a.style.backgroundImage = 'url("'.concat(r, '")'), g(a).setAttribute(ot, r), L(a, i, o)), O(t, e, n) } function D(t, e, n) { var a; T(t, e, n), a = e, e = n, (t = It[(n = t).tagName]) && (t(n, a), L(n, a, e)) } function V(t, e, n) { var a; a = t, (-1 < yt.indexOf(a.tagName) ? D : G)(t, e, n) } function F(t, e, n) { var a; t.setAttribute("loading", "lazy"), T(t, e, n), a = e, (e = It[(n = t).tagName]) && e(n, a), s(t, vt) } function j(t) { t.removeAttribute(ot), t.removeAttribute(rt), t.removeAttribute(ct) } function P(t) { m(t, function (t) { k(t, Et) }), k(t, Et) } function S(t) { var e; (e = At[t.tagName]) ? e(t) : E(e = t) && (t = I(e), e.style.backgroundImage = t.backgroundImage) } function U(t, e) { var n; S(t), n = e, u(e = t) || d(e) || (v(e, n.class_entered), v(e, n.class_exited), v(e, n.class_applied), v(e, n.class_loading), v(e, n.class_loaded), v(e, n.class_error)), r(t), y(t) } function $(t, e, n, a) { var i; n.cancel_on_exit && (c(t) !== ut || "IMG" === t.tagName && (z(t), m(i = t, function (t) { j(t) }), j(i), P(t), v(t, n.class_loading), p(a, -1), r(t), f(n.callback_cancel, t, e, a))) } function q(t, e, n, a) { var i, o, r = (o = t, 0 <= pt.indexOf(c(o))); s(t, "entered"), _(t, n.class_entered), v(t, n.class_exited), i = t, o = a, n.unobserve_entered && b(i, o), f(n.callback_enter, t, e, a), r || V(t, n, a) } function H(t) { return t.use_native && "loading" in HTMLImageElement.prototype } function B(t, i, o) { t.forEach(function (t) { return (a = t).isIntersecting || 0 < a.intersectionRatio ? q(t.target, t, i, o) : (e = t.target, n = t, a = i, t = o, void (u(e) || (_(e, a.class_exited), $(e, n, a, t), f(a.callback_exit, e, n, t)))); var e, n, a }) } function J(e, n) { var t; et && !H(e) && (n._observer = new IntersectionObserver(function (t) { B(t, e, n) }, { root: (t = e).container === document ? null : t.container, rootMargin: t.thresholds || t.threshold + "px" })) } function K(t) { return Array.prototype.slice.call(t) } function Q(t) { return t.container.querySelectorAll(t.elements_selector) } function W(t) { return c(t) === _t } function X(t, e) { return e = t || Q(e), K(e).filter(u) } function Y(e, t) { var n; (n = Q(e), K(n).filter(W)).forEach(function (t) { v(t, e.class_error), r(t) }), t.update() } function t(t, e) { var n, a, t = i(t); this._settings = t, this.loadingCount = 0, J(t, this), n = t, a = this, Z && window.addEventListener("online", function () { Y(n, a) }), this.update(e) } var Z = "undefined" != typeof window, tt = Z && !("onscroll" in window) || "undefined" != typeof navigator && /(gle|ing|ro)bot|crawl|spider/i.test(navigator.userAgent), et = Z && "IntersectionObserver" in window, nt = Z && "classList" in document.createElement("p"), at = Z && 1 < window.devicePixelRatio, it = { elements_selector: ".lazy", container: tt || Z ? document : null, threshold: 300, thresholds: null, data_src: "src", data_srcset: "srcset", data_sizes: "sizes", data_bg: "bg", data_bg_hidpi: "bg-hidpi", data_bg_multi: "bg-multi", data_bg_multi_hidpi: "bg-multi-hidpi", data_poster: "poster", class_applied: "applied", class_loading: "litespeed-loading", class_loaded: "litespeed-loaded", class_error: "error", class_entered: "entered", class_exited: "exited", unobserve_completed: !0, unobserve_entered: !1, cancel_on_exit: !0, callback_enter: null, callback_exit: null, callback_applied: null, callback_loading: null, callback_loaded: null, callback_error: null, callback_finish: null, callback_cancel: null, use_native: !1 }, ot = "src", rt = "srcset", ct = "sizes", lt = "poster", st = "llOriginalAttrs", ut = "loading", dt = "loaded", ft = "applied", _t = "error", vt = "native", gt = "data-", bt = "ll-status", pt = [ut, dt, ft, _t], ht = [ot], mt = [ot, lt], Et = [ot, rt, ct], It = { IMG: function (t, e) { m(t, function (t) { A(t, Et), x(t, e) }), A(t, Et), x(t, e) }, IFRAME: function (t, e) { A(t, ht), w(t, ot, l(t, e.data_src)) }, VIDEO: function (t, e) { a(t, function (t) { A(t, ht), w(t, ot, l(t, e.data_src)) }), A(t, mt), w(t, lt, l(t, e.data_poster)), w(t, ot, l(t, e.data_src)), t.load() } }, yt = ["IMG", "IFRAME", "VIDEO"], At = { IMG: P, IFRAME: function (t) { k(t, ht) }, VIDEO: function (t) { a(t, function (t) { k(t, ht) }), k(t, mt), t.load() } }, kt = ["IMG", "IFRAME", "VIDEO"]; return t.prototype = { update: function (t) { var e, n, a, i = this._settings, o = X(t, i); { if (h(this, o.length), !tt && et) return H(i) ? (e = i, n = this, o.forEach(function (t) { -1 !== kt.indexOf(t.tagName) && F(t, e, n) }), void h(n, 0)) : (t = this._observer, i = o, t.disconnect(), a = t, void i.forEach(function (t) { a.observe(t) })); this.loadAll(o) } }, destroy: function () { this._observer && this._observer.disconnect(), Q(this._settings).forEach(function (t) { y(t) }), delete this._observer, delete this._settings, delete this.loadingCount, delete this.toLoadCount }, loadAll: function (t) { var e = this, n = this._settings; X(t, n).forEach(function (t) { b(t, e), V(t, n, e) }) }, restoreAll: function () { var e = this._settings; Q(e).forEach(function (t) { U(t, e) }) } }, t.load = function (t, e) { e = i(e); V(t, e) }, t.resetStatus = function (t) { r(t) }, Z && function (t, e) { if (e) if (e.length) for (var n, a = 0; n = e[a]; a += 1)o(t, n); else o(t, e) }(t, window.lazyLoadOptions), t }); !function (e, t) { "use strict"; function a() { t.body.classList.add("litespeed_lazyloaded") } function n() { console.log("[LiteSpeed] Start Lazy Load Images"), d = new LazyLoad({ elements_selector: "[data-lazyloaded]", callback_finish: a }), o = function () { d.update() }, e.MutationObserver && new MutationObserver(o).observe(t.documentElement, { childList: !0, subtree: !0, attributes: !0 }) } var d, o; e.addEventListener ? e.addEventListener("load", n, !1) : e.attachEvent("onload", n) }(window, document);
    </script>
    <script data-no-optimize="1">
        var litespeed_vary = document.cookie.replace(/(?:(?:^|.*;\s*)_lscache_vary\s*\=\s*([^;]*).*$)|^.*$/, ""); litespeed_vary || fetch("/wp-content/plugins/litespeed-cache/guest.vary.php", { method: "POST", cache: "no-cache", redirect: "follow" }).then(e => e.json()).then(e => { console.log(e), e.hasOwnProperty("reload") && "yes" == e.reload && (sessionStorage.setItem("litespeed_docref", document.referrer), window.location.reload(!0)) });
    </script>
    <script data-optimized="1" type="litespeed/javascript"
        data-src="https://www.mymealcatering.com/wp-content/litespeed/js/43a6a23b4c1e23f5b03502e2e5e9f551.js?ver=8361f"></script>
    <script>
        const litespeed_ui_events = ["mouseover", "click", "keydown", "wheel", "touchmove", "touchstart"]; var urlCreator = window.URL || window.webkitURL; function litespeed_load_delayed_js_force() { console.log("[LiteSpeed] Start Load JS Delayed"), litespeed_ui_events.forEach(e => { window.removeEventListener(e, litespeed_load_delayed_js_force, { passive: !0 }) }), document.querySelectorAll("iframe[data-litespeed-src]").forEach(e => { e.setAttribute("src", e.getAttribute("data-litespeed-src")) }), "loading" == document.readyState ? window.addEventListener("DOMContentLoaded", litespeed_load_delayed_js) : litespeed_load_delayed_js() } litespeed_ui_events.forEach(e => { window.addEventListener(e, litespeed_load_delayed_js_force, { passive: !0 }) }); async function litespeed_load_delayed_js() { let t = []; for (var d in document.querySelectorAll('script[type="litespeed/javascript"]').forEach(e => { t.push(e) }), t) await new Promise(e => litespeed_load_one(t[d], e)); document.dispatchEvent(new Event("DOMContentLiteSpeedLoaded")), window.dispatchEvent(new Event("DOMContentLiteSpeedLoaded")) } function litespeed_load_one(t, e) { console.log("[LiteSpeed] Load ", t); var d = document.createElement("script"); d.addEventListener("load", e), d.addEventListener("error", e), t.getAttributeNames().forEach(e => { "type" != e && d.setAttribute("data-src" == e ? "src" : e, t.getAttribute(e)) }); let a = !(d.type = "text/javascript"); !d.src && t.textContent && (d.src = litespeed_inline2src(t.textContent), a = !0), t.after(d), t.remove(), a && e() } function litespeed_inline2src(t) { try { var d = urlCreator.createObjectURL(new Blob([t.replace(/^(?:<!--)?(.*?)(?:-->)?$/gm, "$1")], { type: "text/javascript" })) } catch (e) { d = "data:text/javascript;base64," + btoa(t.replace(/^(?:<!--)?(.*?)(?:-->)?$/gm, "$1")) } return d }
    </script>

</body>

</html>