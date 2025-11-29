<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */@layer theme{:root,:host{--font-sans:'Instrument Sans',ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-serif:ui-serif,Georgia,Cambria,"Times New Roman",Times,serif;--font-mono:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--color-red-50:oklch(.971 .013 17.38);--color-red-100:oklch(.936 .032 17.717);--color-red-200:oklch(.885 .062 18.334);--color-red-300:oklch(.808 .114 19.571);--color-red-400:oklch(.704 .191 22.216);--color-red-500:oklch(.637 .237 25.331);--color-red-600:oklch(.577 .245 27.325);--color-red-700:oklch(.505 .213 27.518);--color-red-800:oklch(.444 .177 26.899);--color-red-900:oklch(.396 .141 25.723);--color-red-950:oklch(.258 .092 26.042);--color-orange-50:oklch(.98 .016 73.684);--color-orange-100:oklch(.954 .038 75.164);--color-orange-200:oklch(.901 .076 70.697);--color-orange-300:oklch(.837 .128 66.29);--color-orange-400:oklch(.75 .183 55.934);--color-orange-500:oklch(.705 .213 47.604);--color-orange-600:oklch(.646 .222 41.116);--color-orange-700:oklch(.553 .195 38.402);--color-orange-800:oklch(.47 .157 37.304);--color-orange-900:oklch(.408 .123 38.172);--color-orange-950:oklch(.266 .079 36.259);--color-amber-50:oklch(.987 .022 95.277);--color-amber-100:oklch(.962 .059 95.617);--color-amber-200:oklch(.924 .12 95.746);--color-amber-300:oklch(.879 .169 91.605);--color-amber-400:oklch(.828 .189 84.429);--color-amber-500:oklch(.769 .188 70.08);--color-amber-600:oklch(.666 .179 58.318);--color-amber-700:oklch(.555 .163 48.998);--color-amber-800:oklch(.473 .137 46.201);--color-amber-900:oklch(.414 .112 45.904);--color-amber-950:oklch(.279 .077 45.635);--color-yellow-50:oklch(.987 .026 102.212);--color-yellow-100:oklch(.973 .071 103.193);--color-yellow-200:oklch(.945 .129 101.54);--color-yellow-300:oklch(.905 .182 98.111);--color-yellow-400:oklch(.852 .199 91.936);--color-yellow-500:oklch(.795 .184 86.047);--color-yellow-600:oklch(.681 .162 75.834);--color-yellow-700:oklch(.554 .135 66.442);--color-yellow-800:oklch(.476 .114 61.907);--color-yellow-900:oklch(.421 .095 57.708);--color-yellow-950:oklch(.286 .066 53.813);--color-lime-50:oklch(.986 .031 120.757);--color-lime-100:oklch(.967 .067 122.328);--color-lime-200:oklch(.938 .127 124.321);--color-lime-300:oklch(.897 .196 126.665);--color-lime-400:oklch(.841 .238 128.85);--color-lime-500:oklch(.768 .233 130.85);--color-lime-600:oklch(.648 .2 131.684);--color-lime-700:oklch(.532 .157 131.589);--color-lime-800:oklch(.453 .124 130.933);--color-lime-900:oklch(.405 .101 131.063);--color-lime-950:oklch(.274 .072 132.109);--color-green-50:oklch(.982 .018 155.826);--color-green-100:oklch(.962 .044 156.743);--color-green-200:oklch(.925 .084 155.995);--color-green-300:oklch(.871 .15 154.449);--color-green-400:oklch(.792 .209 151.711);--color-green-500:oklch(.723 .219 149.579);--color-green-600:oklch(.627 .194 149.214);--color-green-700:oklch(.527 .154 150.069);--color-green-800:oklch(.448 .119 151.328);--color-green-900:oklch(.393 .095 152.535);--color-green-950:oklch(.266 .065 152.934);--color-emerald-50:oklch(.979 .021 166.113);--color-emerald-100:oklch(.95 .052 163.051);--color-emerald-200:oklch(.905 .093 164.15);--color-emerald-300:oklch(.845 .143 164.978);--color-emerald-400:oklch(.765 .177 163.223);--color-emerald-500:oklch(.696 .17 162.48);--color-emerald-600:oklch(.596 .145 163.225);--color-emerald-700:oklch(.508 .118 165.612);--color-emerald-800:oklch(.432 .095 166.913);--color-emerald-900:oklch(.378 .077 168.94);--color-emerald-950:oklch(.262 .051 172.552);--color-teal-50:oklch(.984 .014 180.72);--color-teal-100:oklch(.953 .051 180.801);--color-teal-200:oklch(.91 .096 180.426);--color-teal-300:oklch(.855 .138 181.071);--color-teal-400:oklch(.777 .152 181.912);--color-teal-500:oklch(.704 .14 182.503);--color-teal-600:oklch(.6 .118 184.704);--color-teal-700:oklch(.511 .096 186.391);--color-teal-800:oklch(.437 .078 188.216);--color-teal-900:oklch(.386 .063 188.416);--color-teal-950:oklch(.277 .046 192.524);--color-cyan-50:oklch(.984 .019 200.873);--color-cyan-100:oklch(.956 .045 203.388);--color-cyan-200:oklch(.917 .08 205.041);--color-cyan-300:oklch(.865 .127 207.078);--color-cyan-400:oklch(.789 .154 211.53);--color-cyan-500:oklch(.715 .143 215.221);--color-cyan-600:oklch(.609 .126 221.723);--color-cyan-700:oklch(.52 .105 223.128);--color-cyan-800:oklch(.45 .085 224.283);--color-cyan-900:oklch(.398 .07 227.392);--color-cyan-950:oklch(.302 .056 229.695);--color-sky-50:oklch(.977 .013 236.62);--color-sky-100:oklch(.951 .026 236.824);--color-sky-200:oklch(.901 .058 230.902);--color-sky-300:oklch(.828 .111 230.318);--color-sky-400:oklch(.746 .16 232.661);--color-sky-500:oklch(.685 .169 237.323);--color-sky-600:oklch(.588 .158 241.966);--color-sky-700:oklch(.5 .134 242.749);--color-sky-800:oklch(.443 .11 240.79);--color-sky-900:oklch(.391 .09 240.876);--color-sky-950:oklch(.293 .066 243.157);--color-blue-50:oklch(.97 .014 254.604);--color-blue-100:oklch(.932 .032 255.585);--color-blue-200:oklch(.882 .059 254.128);--color-blue-300:oklch(.809 .105 251.813);--color-blue-400:oklch(.707 .165 254.624);--color-blue-500:oklch(.623 .214 259.815);--color-blue-600:oklch(.546 .245 262.881);--color-blue-700:oklch(.488 .243 264.376);--color-blue-800:oklch(.424 .199 265.638);--color-blue-900:oklch(.379 .146 265.522);--color-blue-950:oklch(.282 .091 267.935);--color-indigo-50:oklch(.962 .018 272.314);--color-indigo-100:oklch(.93 .034 272.788);--color-indigo-200:oklch(.87 .065 274.039);--color-indigo-300:oklch(.785 .115 274.713);--color-indigo-400:oklch(.673 .182 276.935);--color-indigo-500:oklch(.585 .233 277.117);--color-indigo-600:oklch(.511 .262 276.966);--color-indigo-700:oklch(.457 .24 277.023);--color-indigo-800:oklch(.398 .195 277.366);--color-indigo-900:oklch(.359 .144 278.697);--color-indigo-950:oklch(.257 .09 281.288);--color-violet-50:oklch(.969 .016 293.756);--color-violet-100:oklch(.943 .029 294.588);--color-violet-200:oklch(.894 .057 293.283);--color-violet-300:oklch(.811 .111 293.571);--color-violet-400:oklch(.702 .183 293.541);--color-violet-500:oklch(.606 .25 292.717);--color-violet-600:oklch(.541 .281 293.009);--color-violet-700:oklch(.491 .27 292.581);--color-violet-800:oklch(.432 .232 292.759);--color-violet-900:oklch(.38 .189 293.745);--color-violet-950:oklch(.283 .141 291.089);--color-purple-50:oklch(.977 .014 308.299);--color-purple-100:oklch(.946 .033 307.174);--color-purple-200:oklch(.902 .063 306.703);--color-purple-300:oklch(.827 .119 306.383);--color-purple-400:oklch(.714 .203 305.504);--color-purple-500:oklch(.627 .265 303.9);--color-purple-600:oklch(.558 .288 302.321);--color-purple-700:oklch(.496 .265 301.924);--color-purple-800:oklch(.438 .218 303.724);--color-purple-900:oklch(.381 .176 304.987);--color-purple-950:oklch(.291 .149 302.717);--color-fuchsia-50:oklch(.977 .017 320.058);--color-fuchsia-100:oklch(.952 .037 318.852);--color-fuchsia-200:oklch(.903 .076 319.62);--color-fuchsia-300:oklch(.833 .145 321.434);--color-fuchsia-400:oklch(.74 .238 322.16);--color-fuchsia-500:oklch(.667 .295 322.15);--color-fuchsia-600:oklch(.591 .293 322.896);--color-fuchsia-700:oklch(.518 .253 323.949);--color-fuchsia-800:oklch(.452 .211 324.591);--color-fuchsia-900:oklch(.401 .17 325.612);--color-fuchsia-950:oklch(.293 .136 325.661);--color-pink-50:oklch(.971 .014 343.198);--color-pink-100:oklch(.948 .028 342.258);--color-pink-200:oklch(.899 .061 343.231);--color-pink-300:oklch(.823 .12 346.018);--color-pink-400:oklch(.718 .202 349.761);--color-pink-500:oklch(.656 .241 354.308);--color-pink-600:oklch(.592 .249 .584);--color-pink-700:oklch(.525 .223 3.958);--color-pink-800:oklch(.459 .187 3.815);--color-pink-900:oklch(.408 .153 2.432);--color-pink-950:oklch(.284 .109 3.907);--color-rose-50:oklch(.969 .015 12.422);--color-rose-100:oklch(.941 .03 12.58);--color-rose-200:oklch(.892 .058 10.001);--color-rose-300:oklch(.81 .117 11.638);--color-rose-400:oklch(.712 .194 13.428);--color-rose-500:oklch(.645 .246 16.439);--color-rose-600:oklch(.586 .253 17.585);--color-rose-700:oklch(.514 .222 16.935);--color-rose-800:oklch(.455 .188 13.697);--color-rose-900:oklch(.41 .159 10.272);--color-rose-950:oklch(.271 .105 12.094);--color-slate-50:oklch(.984 .003 247.858);--color-slate-100:oklch(.968 .007 247.896);--color-slate-200:oklch(.929 .013 255.508);--color-slate-300:oklch(.869 .022 252.894);--color-slate-400:oklch(.704 .04 256.788);--color-slate-500:oklch(.554 .046 257.417);--color-slate-600:oklch(.446 .043 257.281);--color-slate-700:oklch(.372 .044 257.287);--color-slate-800:oklch(.279 .041 260.031);--color-slate-900:oklch(.208 .042 265.755);--color-slate-950:oklch(.129 .042 264.695);--color-gray-50:oklch(.985 .002 247.839);--color-gray-100:oklch(.967 .003 264.542);--color-gray-200:oklch(.928 .006 264.531);--color-gray-300:oklch(.872 .01 258.338);--color-gray-400:oklch(.707 .022 261.325);--color-gray-500:oklch(.551 .027 264.364);--color-gray-600:oklch(.446 .03 256.802);--color-gray-700:oklch(.373 .034 259.733);--color-gray-800:oklch(.278 .033 256.848);--color-gray-900:oklch(.21 .034 264.665);--color-gray-950:oklch(.13 .028 261.692);--color-zinc-50:oklch(.985 0 0);--color-zinc-100:oklch(.967 .001 286.375);--color-zinc-200:oklch(.92 .004 286.32);--color-zinc-300:oklch(.871 .006 286.286);--color-zinc-400:oklch(.705 .015 286.067);--color-zinc-500:oklch(.552 .016 285.938);--color-zinc-600:oklch(.442 .017 285.786);--color-zinc-700:oklch(.37 .013 285.805);--color-zinc-800:oklch(.274 .006 286.033);--color-zinc-900:oklch(.21 .006 285.885);--color-zinc-950:oklch(.141 .005 285.823);--color-neutral-50:oklch(.985 0 0);--color-neutral-100:oklch(.97 0 0);--color-neutral-200:oklch(.922 0 0);--color-neutral-300:oklch(.87 0 0);--color-neutral-400:oklch(.708 0 0);--color-neutral-500:oklch(.556 0 0);--color-neutral-600:oklch(.439 0 0);--color-neutral-700:oklch(.371 0 0);--color-neutral-800:oklch(.269 0 0);--color-neutral-900:oklch(.205 0 0);--color-neutral-950:oklch(.145 0 0);--color-stone-50:oklch(.985 .001 106.423);--color-stone-100:oklch(.97 .001 106.424);--color-stone-200:oklch(.923 .003 48.717);--color-stone-300:oklch(.869 .005 56.366);--color-stone-400:oklch(.709 .01 56.259);--color-stone-500:oklch(.553 .013 58.071);--color-stone-600:oklch(.444 .011 73.639);--color-stone-700:oklch(.374 .01 67.558);--color-stone-800:oklch(.268 .007 34.298);--color-stone-900:oklch(.216 .006 56.043);--color-stone-950:oklch(.147 .004 49.25);--color-black:#000;--color-white:#fff;--spacing:.25rem;--breakpoint-sm:40rem;--breakpoint-md:48rem;--breakpoint-lg:64rem;--breakpoint-xl:80rem;--breakpoint-2xl:96rem;--container-3xs:16rem;--container-2xs:18rem;--container-xs:20rem;--container-sm:24rem;--container-md:28rem;--container-lg:32rem;--container-xl:36rem;--container-2xl:42rem;--container-3xl:48rem;--container-4xl:56rem;--container-5xl:64rem;--container-6xl:72rem;--container-7xl:80rem;--text-xs:.75rem;--text-xs--line-height:calc(1/.75);--text-sm:.875rem;--text-sm--line-height:calc(1.25/.875);--text-base:1rem;--text-base--line-height: 1.5 ;--text-lg:1.125rem;--text-lg--line-height:calc(1.75/1.125);--text-xl:1.25rem;--text-xl--line-height:calc(1.75/1.25);--text-2xl:1.5rem;--text-2xl--line-height:calc(2/1.5);--text-3xl:1.875rem;--text-3xl--line-height: 1.2 ;--text-4xl:2.25rem;--text-4xl--line-height:calc(2.5/2.25);--text-5xl:3rem;--text-5xl--line-height:1;--text-6xl:3.75rem;--text-6xl--line-height:1;--text-7xl:4.5rem;--text-7xl--line-height:1;--text-8xl:6rem;--text-8xl--line-height:1;--text-9xl:8rem;--text-9xl--line-height:1;--font-weight-thin:100;--font-weight-extralight:200;--font-weight-light:300;--font-weight-normal:400;--font-weight-medium:500;--font-weight-semibold:600;--font-weight-bold:700;--font-weight-extrabold:800;--font-weight-black:900;--tracking-tighter:-.05em;--tracking-tight:-.025em;--tracking-normal:0em;--tracking-wide:.025em;--tracking-wider:.05em;--tracking-widest:.1em;--leading-tight:1.25;--leading-snug:1.375;--leading-normal:1.5;--leading-relaxed:1.625;--leading-loose:2;--radius-xs:.125rem;--radius-sm:.25rem;--radius-md:.375rem;--radius-lg:.5rem;--radius-xl:.75rem;--radius-2xl:1rem;--radius-3xl:1.5rem;--radius-4xl:2rem;--shadow-2xs:0 1px #0000000d;--shadow-xs:0 1px 2px 0 #0000000d;--shadow-sm:0 1px 3px 0 #0000001a,0 1px 2px -1px #0000001a;--shadow-md:0 4px 6px -1px #0000001a,0 2px 4px -2px #0000001a;--shadow-lg:0 10px 15px -3px #0000001a,0 4px 6px -4px #0000001a;--shadow-xl:0 20px 25px -5px #0000001a,0 8px 10px -6px #0000001a;--shadow-2xl:0 25px 50px -12px #00000040;--inset-shadow-2xs:inset 0 1px #0000000d;--inset-shadow-xs:inset 0 1px 1px #0000000d;--inset-shadow-sm:inset 0 2px 4px #0000000d;--drop-shadow-xs:0 1px 1px #0000000d;--drop-shadow-sm:0 1px 2px #00000026;--drop-shadow-md:0 3px 3px #0000001f;--drop-shadow-lg:0 4px 4px #00000026;--drop-shadow-xl:0 9px 7px #0000001a;--drop-shadow-2xl:0 25px 25px #00000026;--ease-in:cubic-bezier(.4,0,1,1);--ease-out:cubic-bezier(0,0,.2,1);--ease-in-out:cubic-bezier(.4,0,.2,1);--animate-spin:spin 1s linear infinite;--animate-ping:ping 1s cubic-bezier(0,0,.2,1)infinite;--animate-pulse:pulse 2s cubic-bezier(.4,0,.6,1)infinite;--animate-bounce:bounce 1s infinite;--blur-xs:4px;--blur-sm:8px;--blur-md:12px;--blur-lg:16px;--blur-xl:24px;--blur-2xl:40px;--blur-3xl:64px;--perspective-dramatic:100px;--perspective-near:300px;--perspective-normal:500px;--perspective-midrange:800px;--perspective-distant:1200px;--aspect-video:16/9;--default-transition-duration:.15s;--default-transition-timing-function:cubic-bezier(.4,0,.2,1);--default-font-family:var(--font-sans);--default-font-feature-settings:var(--font-sans--font-feature-settings);--default-font-variation-settings:var(--font-sans--font-variation-settings);--default-mono-font-family:var(--font-mono);--default-mono-font-feature-settings:var(--font-mono--font-feature-settings);--default-mono-font-variation-settings:var(--font-mono--font-variation-settings)}}@layer base{*,:after,:before,::backdrop{box-sizing:border-box;border:0 solid;margin:0;padding:0}::file-selector-button{box-sizing:border-box;border:0 solid;margin:0;padding:0}html,:host{-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;line-height:1.5;font-family:var(--default-font-family,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji");font-feature-settings:var(--default-font-feature-settings,normal);font-variation-settings:var(--default-font-variation-settings,normal);-webkit-tap-highlight-color:transparent}body{line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;-webkit-text-decoration:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:var(--default-mono-font-family,ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace);font-feature-settings:var(--default-mono-font-feature-settings,normal);font-variation-settings:var(--default-mono-font-variation-settings,normal);font-size:1em}small{font-size:80%}sub,sup{vertical-align:baseline;font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}:-moz-focusring{outline:auto}progress{vertical-align:baseline}summary{display:list-item}ol,ul,menu{list-style:none}img,svg,video,canvas,audio,iframe,embed,object{vertical-align:middle;display:block}img,video{max-width:100%;height:auto}button,input,select,optgroup,textarea{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}::file-selector-button{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}:where(select:is([multiple],[size])) optgroup{font-weight:bolder}:where(select:is([multiple],[size])) optgroup option{padding-inline-start:20px}::file-selector-button{margin-inline-end:4px}::placeholder{opacity:1;color:color-mix(in oklab,currentColor 50%,transparent)}textarea{resize:vertical}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-date-and-time-value{min-height:1lh;text-align:inherit}::-webkit-datetime-edit{display:inline-flex}::-webkit-datetime-edit-fields-wrapper{padding:0}::-webkit-datetime-edit{padding-block:0}::-webkit-datetime-edit-year-field{padding-block:0}::-webkit-datetime-edit-month-field{padding-block:0}::-webkit-datetime-edit-day-field{padding-block:0}::-webkit-datetime-edit-hour-field{padding-block:0}::-webkit-datetime-edit-minute-field{padding-block:0}::-webkit-datetime-edit-second-field{padding-block:0}::-webkit-datetime-edit-millisecond-field{padding-block:0}::-webkit-datetime-edit-meridiem-field{padding-block:0}:-moz-ui-invalid{box-shadow:none}button,input:where([type=button],[type=reset],[type=submit]){-webkit-appearance:button;-moz-appearance:button;appearance:button}::file-selector-button{-webkit-appearance:button;-moz-appearance:button;appearance:button}::-webkit-inner-spin-button{height:auto}::-webkit-outer-spin-button{height:auto}[hidden]:where(:not([hidden=until-found])){display:none!important}}@layer components;@layer utilities{.absolute{position:absolute}.relative{position:relative}.static{position:static}.inset-0{inset:calc(var(--spacing)*0)}.-mt-\[4\.9rem\]{margin-top:-4.9rem}.-mb-px{margin-bottom:-1px}.mb-1{margin-bottom:calc(var(--spacing)*1)}.mb-2{margin-bottom:calc(var(--spacing)*2)}.mb-4{margin-bottom:calc(var(--spacing)*4)}.mb-6{margin-bottom:calc(var(--spacing)*6)}.-ml-8{margin-left:calc(var(--spacing)*-8)}.flex{display:flex}.hidden{display:none}.inline-block{display:inline-block}.inline-flex{display:inline-flex}.table{display:table}.aspect-\[335\/376\]{aspect-ratio:335/376}.h-1{height:calc(var(--spacing)*1)}.h-1\.5{height:calc(var(--spacing)*1.5)}.h-2{height:calc(var(--spacing)*2)}.h-2\.5{height:calc(var(--spacing)*2.5)}.h-3{height:calc(var(--spacing)*3)}.h-3\.5{height:calc(var(--spacing)*3.5)}.h-14{height:calc(var(--spacing)*14)}.h-14\.5{height:calc(var(--spacing)*14.5)}.min-h-screen{min-height:100vh}.w-1{width:calc(var(--spacing)*1)}.w-1\.5{width:calc(var(--spacing)*1.5)}.w-2{width:calc(var(--spacing)*2)}.w-2\.5{width:calc(var(--spacing)*2.5)}.w-3{width:calc(var(--spacing)*3)}.w-3\.5{width:calc(var(--spacing)*3.5)}.w-\[448px\]{width:448px}.w-full{width:100%}.max-w-\[335px\]{max-width:335px}.max-w-none{max-width:none}.flex-1{flex:1}.shrink-0{flex-shrink:0}.translate-y-0{--tw-translate-y:calc(var(--spacing)*0);translate:var(--tw-translate-x)var(--tw-translate-y)}.transform{transform:var(--tw-rotate-x)var(--tw-rotate-y)var(--tw-rotate-z)var(--tw-skew-x)var(--tw-skew-y)}.flex-col{flex-direction:column}.flex-col-reverse{flex-direction:column-reverse}.items-center{align-items:center}.justify-center{justify-content:center}.justify-end{justify-content:flex-end}.gap-3{gap:calc(var(--spacing)*3)}.gap-4{gap:calc(var(--spacing)*4)}:where(.space-x-1>:not(:last-child)){--tw-space-x-reverse:0;margin-inline-start:calc(calc(var(--spacing)*1)*var(--tw-space-x-reverse));margin-inline-end:calc(calc(var(--spacing)*1)*calc(1 - var(--tw-space-x-reverse)))}.overflow-hidden{overflow:hidden}.rounded-full{border-radius:3.40282e38px}.rounded-sm{border-radius:var(--radius-sm)}.rounded-t-lg{border-top-left-radius:var(--radius-lg);border-top-right-radius:var(--radius-lg)}.rounded-br-lg{border-bottom-right-radius:var(--radius-lg)}.rounded-bl-lg{border-bottom-left-radius:var(--radius-lg)}.border{border-style:var(--tw-border-style);border-width:1px}.border-\[\#19140035\]{border-color:#19140035}.border-\[\#e3e3e0\]{border-color:#e3e3e0}.border-black{border-color:var(--color-black)}.border-transparent{border-color:#0000}.bg-\[\#1b1b18\]{background-color:#1b1b18}.bg-\[\#FDFDFC\]{background-color:#fdfdfc}.bg-\[\#dbdbd7\]{background-color:#dbdbd7}.bg-\[\#fff2f2\]{background-color:#fff2f2}.bg-white{background-color:var(--color-white)}.p-6{padding:calc(var(--spacing)*6)}.px-5{padding-inline:calc(var(--spacing)*5)}.py-1{padding-block:calc(var(--spacing)*1)}.py-1\.5{padding-block:calc(var(--spacing)*1.5)}.py-2{padding-block:calc(var(--spacing)*2)}.pb-12{padding-bottom:calc(var(--spacing)*12)}.text-sm{font-size:var(--text-sm);line-height:var(--tw-leading,var(--text-sm--line-height))}.text-\[13px\]{font-size:13px}.leading-\[20px\]{--tw-leading:20px;line-height:20px}.leading-normal{--tw-leading:var(--leading-normal);line-height:var(--leading-normal)}.font-medium{--tw-font-weight:var(--font-weight-medium);font-weight:var(--font-weight-medium)}.text-\[\#1b1b18\]{color:#1b1b18}.text-\[\#706f6c\]{color:#706f6c}.text-\[\#F53003\],.text-\[\#f53003\]{color:#f53003}.text-white{color:var(--color-white)}.underline{text-decoration-line:underline}.underline-offset-4{text-underline-offset:4px}.opacity-100{opacity:1}.shadow-\[0px_0px_1px_0px_rgba\(0\,0\,0\,0\.03\)\,0px_1px_2px_0px_rgba\(0\,0\,0\,0\.06\)\]{--tw-shadow:0px 0px 1px 0px var(--tw-shadow-color,#00000008),0px 1px 2px 0px var(--tw-shadow-color,#0000000f);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-\[inset_0px_0px_0px_1px_rgba\(26\,26\,0\,0\.16\)\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#1a1a0029);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.\!filter{filter:var(--tw-blur,)var(--tw-brightness,)var(--tw-contrast,)var(--tw-grayscale,)var(--tw-hue-rotate,)var(--tw-invert,)var(--tw-saturate,)var(--tw-sepia,)var(--tw-drop-shadow,)!important}.filter{filter:var(--tw-blur,)var(--tw-brightness,)var(--tw-contrast,)var(--tw-grayscale,)var(--tw-hue-rotate,)var(--tw-invert,)var(--tw-saturate,)var(--tw-sepia,)var(--tw-drop-shadow,)}.transition-all{transition-property:all;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.transition-opacity{transition-property:opacity;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.delay-300{transition-delay:.3s}.duration-750{--tw-duration:.75s;transition-duration:.75s}.not-has-\[nav\]\:hidden:not(:has(:is(nav))){display:none}.before\:absolute:before{content:var(--tw-content);position:absolute}.before\:top-0:before{content:var(--tw-content);top:calc(var(--spacing)*0)}.before\:top-1\/2:before{content:var(--tw-content);top:50%}.before\:bottom-0:before{content:var(--tw-content);bottom:calc(var(--spacing)*0)}.before\:bottom-1\/2:before{content:var(--tw-content);bottom:50%}.before\:left-\[0\.4rem\]:before{content:var(--tw-content);left:.4rem}.before\:border-l:before{content:var(--tw-content);border-left-style:var(--tw-border-style);border-left-width:1px}.before\:border-\[\#e3e3e0\]:before{content:var(--tw-content);border-color:#e3e3e0}@media (hover:hover){.hover\:border-\[\#1915014a\]:hover{border-color:#1915014a}.hover\:border-\[\#19140035\]:hover{border-color:#19140035}.hover\:border-black:hover{border-color:var(--color-black)}.hover\:bg-black:hover{background-color:var(--color-black)}}@media (width>=64rem){.lg\:-mt-\[6\.6rem\]{margin-top:-6.6rem}.lg\:mb-0{margin-bottom:calc(var(--spacing)*0)}.lg\:mb-6{margin-bottom:calc(var(--spacing)*6)}.lg\:-ml-px{margin-left:-1px}.lg\:ml-0{margin-left:calc(var(--spacing)*0)}.lg\:block{display:block}.lg\:aspect-auto{aspect-ratio:auto}.lg\:w-\[438px\]{width:438px}.lg\:max-w-4xl{max-width:var(--container-4xl)}.lg\:grow{flex-grow:1}.lg\:flex-row{flex-direction:row}.lg\:justify-center{justify-content:center}.lg\:rounded-t-none{border-top-left-radius:0;border-top-right-radius:0}.lg\:rounded-tl-lg{border-top-left-radius:var(--radius-lg)}.lg\:rounded-r-lg{border-top-right-radius:var(--radius-lg);border-bottom-right-radius:var(--radius-lg)}.lg\:rounded-br-none{border-bottom-right-radius:0}.lg\:p-8{padding:calc(var(--spacing)*8)}.lg\:p-20{padding:calc(var(--spacing)*20)}}@media (prefers-color-scheme:dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:border-\[\#3E3E3A\]{border-color:#3e3e3a}.dark\:border-\[\#eeeeec\]{border-color:#eeeeec}.dark\:bg-\[\#0a0a0a\]{background-color:#0a0a0a}.dark\:bg-\[\#1D0002\]{background-color:#1d0002}.dark\:bg-\[\#3E3E3A\]{background-color:#3e3e3a}.dark\:bg-\[\#161615\]{background-color:#161615}.dark\:bg-\[\#eeeeec\]{background-color:#eeeeec}.dark\:text-\[\#1C1C1A\]{color:#1c1c1a}.dark\:text-\[\#A1A09A\]{color:#a1a09a}.dark\:text-\[\#EDEDEC\]{color:#ededec}.dark\:text-\[\#F61500\]{color:#f61500}.dark\:text-\[\#FF4433\]{color:#f43}.dark\:shadow-\[inset_0px_0px_0px_1px_\#fffaed2d\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#fffaed2d);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.dark\:before\:border-\[\#3E3E3A\]:before{content:var(--tw-content);border-color:#3e3e3a}@media (hover:hover){.dark\:hover\:border-\[\#3E3E3A\]:hover{border-color:#3e3e3a}.dark\:hover\:border-\[\#62605b\]:hover{border-color:#62605b}.dark\:hover\:border-white:hover{border-color:var(--color-white)}.dark\:hover\:bg-white:hover{background-color:var(--color-white)}}}@starting-style{.starting\:translate-y-4{--tw-translate-y:calc(var(--spacing)*4);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:translate-y-6{--tw-translate-y:calc(var(--spacing)*6);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:opacity-0{opacity:0}}}@keyframes spin{to{transform:rotate(360deg)}}@keyframes ping{75%,to{opacity:0;transform:scale(2)}}@keyframes pulse{50%{opacity:.5}}@keyframes bounce{0%,to{animation-timing-function:cubic-bezier(.8,0,1,1);transform:translateY(-25%)}50%{animation-timing-function:cubic-bezier(0,0,.2,1);transform:none}}@property --tw-translate-x{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-y{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-z{syntax:"*";inherits:false;initial-value:0}@property --tw-rotate-x{syntax:"*";inherits:false;initial-value:rotateX(0)}@property --tw-rotate-y{syntax:"*";inherits:false;initial-value:rotateY(0)}@property --tw-rotate-z{syntax:"*";inherits:false;initial-value:rotateZ(0)}@property --tw-skew-x{syntax:"*";inherits:false;initial-value:skewX(0)}@property --tw-skew-y{syntax:"*";inherits:false;initial-value:skewY(0)}@property --tw-space-x-reverse{syntax:"*";inherits:false;initial-value:0}@property --tw-border-style{syntax:"*";inherits:false;initial-value:solid}@property --tw-leading{syntax:"*";inherits:false}@property --tw-font-weight{syntax:"*";inherits:false}@property --tw-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-shadow-color{syntax:"*";inherits:false}@property --tw-inset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-shadow-color{syntax:"*";inherits:false}@property --tw-ring-color{syntax:"*";inherits:false}@property --tw-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-ring-color{syntax:"*";inherits:false}@property --tw-inset-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-ring-inset{syntax:"*";inherits:false}@property --tw-ring-offset-width{syntax:"<length>";inherits:false;initial-value:0}@property --tw-ring-offset-color{syntax:"*";inherits:false;initial-value:#fff}@property --tw-ring-offset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-blur{syntax:"*";inherits:false}@property --tw-brightness{syntax:"*";inherits:false}@property --tw-contrast{syntax:"*";inherits:false}@property --tw-grayscale{syntax:"*";inherits:false}@property --tw-hue-rotate{syntax:"*";inherits:false}@property --tw-invert{syntax:"*";inherits:false}@property --tw-opacity{syntax:"*";inherits:false}@property --tw-saturate{syntax:"*";inherits:false}@property --tw-sepia{syntax:"*";inherits:false}@property --tw-drop-shadow{syntax:"*";inherits:false}@property --tw-duration{syntax:"*";inherits:false}@property --tw-content{syntax:"*";inherits:false;initial-value:""}
            </style>
        @endif
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>
        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
                <div class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-bl-lg rounded-br-lg lg:rounded-tl-lg lg:rounded-br-none">
                    <h1 class="mb-4 font-medium text-2xl">Develex API testing</h1>
                    <p class="mb-6 text-[#706f6c] dark:text-[#A1A09A]">Personal testing site for API integrations and webhook endpoints.</p>
                    <ul class="flex flex-col mb-4 lg:mb-6">
                        <li class="flex items-center gap-4 py-2 relative before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A] before:top-1/2 before:bottom-0 before:left-[0.4rem] before:absolute">
                            <span class="relative py-1 bg-white dark:bg-[#161615]">
                                <span class="flex items-center justify-center rounded-full bg-[#FDFDFC] dark:bg-[#161615] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] w-3.5 h-3.5 border dark:border-[#3E3E3A] border-[#e3e3e0]">
                                    <span class="rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A] w-1.5 h-1.5"></span>
                                </span>
                            </span>
                            <span>
                                <a href="#" onclick="showVelosForm(event)" class="inline-flex items-center space-x-1 font-medium underline underline-offset-4 text-[#f53003] dark:text-[#FF4433]">
                                    <span>Velos</span>
                                </a>
                                <span class="ml-1">contact Form</span>
                            </span>
                        </li>
                        <li class="flex items-center gap-4 py-2 relative before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A] before:bottom-1/2 before:top-0 before:left-[0.4rem] before:absolute">
                            <span class="relative py-1 bg-white dark:bg-[#161615]">
                                <span class="flex items-center justify-center rounded-full bg-[#FDFDFC] dark:bg-[#161615] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] w-3.5 h-3.5 border dark:border-[#3E3E3A] border-[#e3e3e0]">
                                    <span class="rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A] w-1.5 h-1.5"></span>
                                </span>
                            </span>
                            <span>
                                <a href="#" onclick="showHydeForm(event)" class="inline-flex items-center space-x-1 font-medium underline underline-offset-4 text-[#f53003] dark:text-[#FF4433]">
                                    <span>Hyde</span>
                                </a>
                                <span class="ml-1">contact Form</span>
                            </span>
                        </li>
                    </ul>
                    <ul class="flex gap-3 text-sm leading-normal">
                        <li>
                            <a href="https://develex.net/api/webhook/velos/create-lead" target="_blank" class="inline-block dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:border-white hover:bg-black hover:border-black px-5 py-1.5 bg-[#1b1b18] rounded-sm border border-black text-white text-sm leading-normal">
                                View API status
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="bg-[#161615] dark:bg-[#161615] lg:-ml-px -mb-px lg:mb-0 rounded-t-lg lg:rounded-t-none lg:rounded-r-lg lg:aspect-auto w-full lg:w-[438px] shrink-0 shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] overflow-y-auto" style="min-height: 500px;">
                    {{-- Custom VBx 10 SVG - Default View --}}
                    <div id="defaultView" class="flex items-center justify-center p-8 bg-[#161615] dark:bg-[#161615]" style="min-height: 500px;">
                        <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" width="29.498mm" height="45.209mm" viewBox="0 0 83.615 128.151" class="w-full h-auto max-w-[120px] transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <g id="Layer_1-2" data-name="Layer 1">
                                <g>
                                    <path d="M56.054,4.406l-.328,1.36,1.906.335.573-1.034h.514c.657.781.924,1.106,1.944.696-.392.537.592,2.089.955,2.131.616.072,1.003-.297,1.361-.322.158-.011.102.568.406.647,1.001.259,2.236.246,3.277.728l-.354,1.404,2.221-.028c.74.486.897,2.631,1.386,3.128.295.3.924.16,1.35.679.213.259,1.529,2.742,1.386,2.925l-2.467-.351.019,1.042,1.737.727c.517.812-1.523.767-.346,1.236.693.276,1.622-.412,1.944.168.234.424-.536.687-.544,1.238-.011.798,1.307,1.709,2.127,1.588l-1.065,1.582c-.003.259.474.092.681.455,1.496,2.623,3.351,10.618,3.771,13.709.224,1.649.106,3.39.136,5.058-.664-.758-1.635-1.596-1.057-2.471l-.692.357c.319-1.122-.911-1.293-1.022-1.476-.154-.253.4-1.201.32-1.858-.124-1.015-1.902-1.54-1.429-3.015l-.706,1.408-.698-.534.745-1.039-.747-1.95.703-.178c-2.539-1.414-1.921-4.697-2.833-6.6-.192-.401-1.603-1.414-2.033-1.921-.853-1.007-2.454-3.57-3.593-4.132-2.23-1.1-7.077-2.527-9.722-2.709-.713-.049-1.302.388-1.722.38-.142-.003-.725-1.533-2.471-.348l-.397-.735c-1.954.435-2.169,1.513-3.847.017-2.786,1.063-6.145.268-9.163.728l-.368-1.081-1.234,1.057-.003-1.412c-.986-.199-.687.364-.706,1.061l-1.933.002-.355-1.062-.888,1.408c-.799-.435-.499-1.39-1.758-1.054l-.175,1.06c-.381-1.311-.728-.451-1.427-.401-.131.009-1.097-.522-2.289-.79-.678-.153-.122-.566-.522-.58-1.207-.042.162,1.021-.176,1.413l-1.757-1.41-.007,1.414c-.834-.227-1.309-.616-1.589.368l-1.798-1.045-1.373.899-1.583-.929.35,1.054c-1.036-.452-1.583.121-2.342.233-.706.105-.916-.87-.848.817-1.472-.394-2.399.652-3.365,1.56-3.922,3.686-8.107,11.353-9.347,16.242-.474,1.867-.457,3.492-.673,5.317-.062.524-.278,1.082-.704.521.356-4.96.863-10.411,3.525-14.638l-.69-.677c.125-.83,1.051-.984,1.193-1.245.34-.624-.501-1.246,1.606-1.955l-.698-1.232,1.408.701-.701-2.466,1.406.351c-.199-1.587.795-2.979-.527-4.235l-1.233,1.06c-.441-1.513.564-1.318.857-1.747.176-.258-.228-1.556.55-1.956l-1.052-.345c.991-.514,1.555-3.01,1.997-3.383.596-.502,2.633-.891,3.462-1.388-.161,1.275-3.74,1.056-1.591,2.468-.14-1.113,1.28-.6,1.911-1.024.183-.122,1.862-2.956,2.507-3.554.392-.364,5.096-3.825,5.488-4.035,2.805-1.504,4.925-.246,7.738-.555l-.358-.699c1.304.089,3.042-1.26,4.091-1.411,3.052-.438,6.29.305,9.301,1.244,2.155.673,4.901,2.218,6.974,2.546,2.714.429,5.09-1.121,7.473.487Z"/>
                                    <path d="M61.677,95.394c-.48,2.183.445,3.623,1.107,5.601,1.115-.045,1.573-.918.326-1.271l.379-3.665c1.378-.209.278.71.329,1.217l.728.354-.704,1.954,1.073-.206.339,1.267.89-.35c.416-.631-.889-1.649.514-1.415.224.238.059,2.651,1.058,2.822.043-.454.601-2.224.806-2.393.265-.218.883-.007.96-.077.206-.186-.661-1.378.179-1.76l.877,2.813c-1.592.334-1.153,1.298-1.416,2.221-.088.309-.657.229-.702.494-.129.75.79,1.96-1.052,2.237l.705,1.042c-1.209.006-1.687,1.928-2.132,2.292-1.769,1.444-1.277,1.641-2.302,3.368-.283.477-1.721,1.011-2.144,1.523-.246.299-.792,2.67-1.176,2.345l-.174-.707c-.654.786-2.259,1.544-2.814,2.134-.411.436-.487,1.233-1.059,1.762-.529.49-1.959,1.244-2.655,1.755.007,1.083,3.762-1.194,3.168.167-.196.45-7.448,5.776-7.937,5.73-.746-.069-.808-1.09-.527-1.672l-.7.358-.178-1.413c-.442,1.328-1.124.815-1.65,1.087-.333.172-.303.518-.571.642-2.321,1.067-4.632,1.028-6.976,1.782l-.154-.684-.696.004-.71.694.702-1.234-2.075.215-.042,1.724c-1.226-.324-1.868-1.41-2.997-.005l-.528-.692,1.058-.709-1.056-.178,1.055-.88-2.248-.052-.219-1.006-3.177-.005.354-1.053c-1.067-.014-.634,1.175-2.115.699l.705-1.403-3.005-1.065-.177.697-.517.009-.565-1.028-1.025.323.31-.997c-2.101-1.055-2.299-3.607-3.215-5.443-.76-1.524-2.97-6.465-3.961-7.334-.363-.318-.988-.232-1.185-.384-.094-.072.347-1.588-1.472-1.362l.703-1.401c-.861.076-1.025-.802-1.07-1.537.703-.619,2.568-2.128,2.784-2.962.219-.845-1.088-2.823.927-2.562.78.101.129,1.365.185,1.41l1.762-.347-.708,2.117-1.053-.182c.571.901,1.788,1.807,2.818,1.593l-.7,1.054c.75.095,1.423-.933,1.51-.971.319-.142,1.057.477,1.292-.279.478-1.539-.824-.788-.686-1.923l1.406.35-.347-1.762c.72.466.884.85,1.757.353-.403,1.822-.517,3.911.035,5.718.08.261.455.283.538.429.804,1.403.21.297,1.016.88,1.719,1.244,1.198,2.29.178,3.902l1.94-1.048.531,1.758,1.227-.36-.173.709,1.057-.35-.347,1.762,1.761-.348-.175,1.759.74-1.036c1.273.207,3.776.989,4.025-.719l.68.023c-.017.721-.018.768.723.678-.291-1.858.845-1.749,2.289-2.124l.184,2.12c1.435.223.628-1.492,1.404-1.759l1.412,2.466-.346-2.467c.903.199.214,1.583,1.225,1.406.651-.114,1.031-.848,1.945-.353l-.35-1.054,1.054.35-.353-1.054c1.075-.098,2.026-.102,1.768-1.413l2.111,1.058c-.437-1.644-.648-4.276,1.764-3.172l.358-2.473.7.357c-.934-1.829,2.025-2.383,1.769-4.591l1.053.356c.473-.935-.704-1.093-.724-1.271-.118-1.09.698-1.94,1.783-1.902.511,1.291-1.226,2.218.88,2.826l.529-.708c-.268,1.554.617,1.186,1.437.464l-.376-1.873,1.071.233.689,1.175-.351-3.528,1.765-.002-.349-1.407,1.713.747Z"/>
                                    <path d="M37.036,84.421l-.35,1.408c1.142.125,2.154-1.43,2.296-1.423.176.008,2.816,1.115,3.259,1.319.55.252.612,1.345,2.199.812l-1.761,1.061.521.672,1.751-.698.409.753,1.695-.411.558.736.205-1.057,1.564.169c.715.955-.441.851-1.058.535l.015,1.038c.91.244,2.051.285,2.108,1.433,1.533-1.545,2.15,1.087,3.533,1.592l-.017.876c-.144.204-1.585-1.713-2.102-.534.795,1.4,1.596,2.741,1.751,4.412-1.046-.018-1.055-1.055-2.282-1.07-1.121-.014-.059,1.08-.885,1.069-.681-2.801-3.052-1.183-5.119-1.17-4.455.029-9.006-.385-13.461-.458-1.543-.025-3.412.471-5.055.216.315-.752,1.641-1.202,2.377-1.323,1.77-.292,3.795.662,4.5-1.136,1.198,2.034,2.253-.135,3.501-.017.973.092,3.095,1,4.667,1.038,1.189.028,2.793-.671,3.376-.619.647.058,2.772,1.237,3.093,1-.161-.815-.668-2.109.352-2.288-.695-.272-2.106-1.78-2.799-1.209-.217.178.395,1.233-.542,1.025-1.242-.275-1.052-1.763-1.418-1.751-1.632,1.776-3.448.662-5.291.666-1.006.002-1.894.421-2.805.399-2.059-.051-4.434-.897-6.538-.868-1.044-.356-1.143-.911-1.065-1.967l-1.231,1.051-.528-1.046c1.471.515,4.489-3.171,4.784-3.198.791-.074,3.081,2.07,4.736,1.073-.172-.787-2.57-.559-2.087-1.735.022-.054.857-.733.916-.739.611-.065,1.501.524,2.231.364Z"/>
                                    <path d="M46.909,55.5c.817.919-.831,1.078-.932,1.162-.169.141-1.521,1.393-1.18,1.656l3.701-.705,1.586.351-1.76.353,5.07-.37c.392,1.333,1.122.083,2.077.721l4.842,3.882c-2.599.551-3.026-1.604-4.698-2.202-.892-.319-1.616.199-2.178-.609l-.528.868,1.177.539c.849.464-.849,1.55-1.43,1.684-1.966.453-2.72-.243-3.627-1.867l1.411-.175-.002-1.407c-1.297-.408-4.145.704-3.906,2.261.065.425,1.762.585,1.787,1.26l-2.114.007,2.114,1.934c-.531.752-1.202.982-2.117.885l.354,1.759c-2.746-.228-4.183-3.247-3.527-5.639l-1.407.349c.684-1.672.162-1.953-.659-3.286-.2-1.61,5.71-3.677,5.946-3.412Z"/>
                                    <path d="M29.626,62.199l-1.757-1.057c1.007.811-2.026,4.808-2.326,4.877-.415.095-1.324-.461-1.91-.296.129-1.496,1.768-1.573,1.408-3.171-1.539,1.247-1.964,2.313-4.249,1.604-.485-.151-1.953-1.178-1.138-1.592,1.064.163,1.143-.901,1.16-1.774-3.064-.94-4.702,2.313-7.407,2.818-.368-.299.801-1.244.982-1.387,4.022-3.174,6.724-3.383,11.536-3.194.758.03,1.571-.592,2.405-.311.966.326,1.558,2.536,1.295,3.483Z"/>
                                    <path d="M34.916,102.053l-.349-1.407c1.374-.239,1.714.978,1.767,2.112,1.036-.353-.137-1.907,1.405-1.761l.351,2.465.36-2.114.879.71.348-.711c.832.184,1.996,2.628,1.667,3.487l.628.391c-.948.021-1.924-.111-2.858.155-.939.267-.356,1.413-1.723.55l-.005,1.065-2.464-.354-.003-1.062-1.76.352-.004-1.76-2.111.704c-.182-1.238-.739-1.985.527-2.82l.178,1.061c.122.17,2.629-1.701,2.117-2.471l1.051,1.409Z"/>
                                    <path d="M55.373,51.978l-.175.7c-3.173.082-6.096,1.866-9.257,2.379-.758.123-3.752.559-3.966-.09,1.179-.307.038-1.487,1.409-2.116l-.703-.349c.245-.671,8.513-2.043,9.697-1.875,1.223.174,1.867,1.069,2.995,1.351Z"/>
                                    <path d="M24.625,52.417c.187.274-.002.87.069.969.025.035.532-.272.816-.234.792.106,1.513.646,2.356.586l-.709,1.762c-1.066-.148-.86-1.296-1.759-1.057l-.349.7-.535-1.054-.345,1.052c-2.661-1.583-5.727-.069-8.292-1.937l1.061-.177-.356-1.053c1.295-.172,7.425-.463,8.044.443Z"/>
                                    <path d="M55.728,87.942l-8.242-7.399.126-.891c1.066-.716,4.094,2.556,4.776,3.346.331.384,3.548,4.729,3.341,4.944Z"/>
                                    <path d="M24.339,91.124c.137,1.348-1.25,1.487-1.763,2.462l1.407-.352c-.207,1.262.907,1.284,1.414,2.115l-4.401.71-.366-.706c.949-.944,2.028-2.315,1.237-3.634-.236-.394-1.205-.101-.531-1.663l3.003,1.068Z"/>
                                    <path d="M82.486,60.484c1.666,2.811,1.291,5.412.147,8.34-.174.445-.205,1.035-.802,1.134l.735-7.234c.002-1.249-2.403-2.505-.079-2.24Z"/>
                                    <path d="M1.414,70.311c-.464.092-.567-.652-.616-.968-.318-2.055.363-4.01-.798-5.906.829-.402,1.414,1.21,1.414,1.76v5.114Z"/>
                                    <path d="M19.052,86.887c.359-2.432,2.567-4.331,4.225-5.996l-2.531,3.991-1.695,2.005Z"/>
                                    <path d="M43.735,82.657c-.367,2.223-2.186.48-3.523,1.054-.939-.758,2.85-1.727,3.523-1.054Z"/>
                                </g>
                            </g>
                        </svg>
                    </div>

                    {{-- Velos Contact Form --}}
                    <div id="velosForm" class="hidden p-6 lg:p-8 bg-[#161615] dark:bg-[#161615]" style="min-height: 500px;">
                        <div class="max-w-lg mx-auto text-[13px] leading-[20px]">
                            <h2 class="mb-4 font-medium text-2xl text-[#1b1b18] dark:text-[#EDEDEC]">Velos - Register Your Interest</h2>
                            <p class="mb-6 text-[#706f6c] dark:text-[#A1A09A]">Please fill out the form below to express your interest in our properties.</p>
                            @if ($errors->any())
                                <div class="text-red-500 bg-red-200/10 rounded-md p-3 mb-6">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="/velos-create-lead" method="POST" class="mb-4 lg:mb-6">
                                @csrf
                                <div class="mb-4 lg:mb-6">
                                    <label for="name" class="block font-medium text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Full name</label>
                                    <input 
                                        id="name"
                                        type="text" 
                                        name="name"
                                        placeholder=" Enter your full name" 
                                        required
                                        class="block w-full rounded-sm border border-[#e3e3e0] dark:border-[#3E3E3A] bg-white dark:bg-[#161615] px-3 py-2 text-[#1b1b18] dark:text-[#EDEDEC] placeholder-[#706f6c] dark:placeholder-[#A1A09A] focus:outline-none focus:ring-2 focus:ring-[#f53003] focus:border-transparent"
                                    >
                                </div>

                                <fieldset class="mb-4 lg:mb-6">
                                    <legend class="block font-medium text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Who are you?</legend>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                        <div class="flex items-center gap-x-4">
                                            <input 
                                                id="user-buyer" 
                                                type="radio" 
                                                name="user_type" 
                                                value="buyer" 
                                                required
                                                class="h-4 w-4 border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-[#f53003] focus:ring-2 focus:ring-[#f53003] focus:ring-offset-0"
                                            >
                                            <label for="user-buyer" class="font-medium text-[#1b1b18] dark:text-[#EDEDEC]"> Buyer</label>
                                        </div>
                                        <div class="flex items-center gap-x-4">
                                            <input 
                                                id="user-agent" 
                                                type="radio" 
                                                name="user_type" 
                                                value="agent"
                                                class="h-4 w-4 border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-[#f53003] focus:ring-2 focus:ring-[#f53003] focus:ring-offset-0"
                                            >
                                            <label for="user-agent" class="font-medium text-[#1b1b18] dark:text-[#EDEDEC]"> Agent</label>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="mb-4 lg:mb-6">
                                    <legend class="block font-medium text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Expected timeline of purchase</legend>
                                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                        <div class="flex items-center gap-x-4">
                                            <input 
                                                id="timeline-1-3" 
                                                type="radio" 
                                                name="timeline" 
                                                value="1-3_month" 
                                                required
                                                class="h-4 w-4 border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-[#f53003] focus:ring-2 focus:ring-[#f53003] focus:ring-offset-0"
                                            >
                                            <label for="timeline-1-3" class="font-medium text-[#1b1b18] dark:text-[#EDEDEC]"> 1-3 Months</label>
                                        </div>
                                        <div class="flex items-center gap-x-4">
                                            <input 
                                                id="timeline-6" 
                                                type="radio" 
                                                name="timeline" 
                                                value="6_month"
                                                class="h-4 w-4 border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-[#f53003] focus:ring-2 focus:ring-[#f53003] focus:ring-offset-0"
                                            >
                                            <label for="timeline-6" class="font-medium text-[#1b1b18] dark:text-[#EDEDEC]"> 6 Months</label>
                                        </div>
                                        <div class="flex items-center gap-x-4">
                                            <input 
                                                id="timeline-1year" 
                                                type="radio" 
                                                name="timeline" 
                                                value="1_year"
                                                class="h-4 w-4 border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-[#f53003] focus:ring-2 focus:ring-[#f53003] focus:ring-offset-0"
                                            >
                                            <label for="timeline-1year" class="font-medium text-[#1b1b18] dark:text-[#EDEDEC]"> 1 Year</label>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="mb-4 lg:mb-6">
                                    <legend class="block font-medium text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Property type</legend>
                                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                        <div class="flex items-center gap-x-4">
                                            <input 
                                                id="property-studio" 
                                                type="radio" 
                                                name="property_type" 
                                                value="studio" 
                                                required
                                                class="h-4 w-4 border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-[#f53003] focus:ring-2 focus:ring-[#f53003] focus:ring-offset-0"
                                            >
                                            <label for="property-studio" class="font-medium text-[#1b1b18] dark:text-[#EDEDEC]"> Studio</label>
                                        </div>
                                        <div class="flex items-center gap-x-4">
                                            <input 
                                                id="property-1br" 
                                                type="radio" 
                                                name="property_type" 
                                                value="1br"
                                                class="h-4 w-4 border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-[#f53003] focus:ring-2 focus:ring-[#f53003] focus:ring-offset-0"
                                            >
                                            <label for="property-1br" class="font-medium text-[#1b1b18] dark:text-[#EDEDEC]"> 1 BR Apartment</label>
                                        </div>
                                        <div class="flex items-center gap-x-4">
                                            <input 
                                                id="property-2br" 
                                                type="radio" 
                                                name="property_type" 
                                                value="2br"
                                                class="h-4 w-4 border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-[#f53003] focus:ring-2 focus:ring-[#f53003] focus:ring-offset-0"
                                            >
                                            <label for="property-2br" class="font-medium text-[#1b1b18] dark:text-[#EDEDEC]"> 2 BR Apartment</label>
                                        </div>
                                    </div>
                                </fieldset>

                                <div class="mb-4 lg:mb-6">
                                    <label for="phone" class="block font-medium text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Phone number</label>
                                    <div class="flex gap-2">
                                        <select 
                                            id="country-code"
                                            name="country_code"
                                            class="px-3 py-2 rounded-sm border border-[#e3e3e0] dark:border-[#3E3E3A] bg-white dark:bg-[#161615] text-[#1b1b18] dark:text-[#EDEDEC] focus:outline-none focus:ring-2 focus:ring-[#f53003] focus:border-transparent"
                                        >
                                            <option value="+971" selected>🇦🇪 +971</option>
                                            <option value="+1">🇺🇸 +1</option>
                                            <option value="+44">🇬🇧 +44</option>
                                            <option value="+33">🇫🇷 +33</option>
                                            <option value="+49">🇩🇪 +49</option>
                                            <option value="+39">🇮🇹 +39</option>
                                            <option value="+34">🇪🇸 +34</option>
                                            <option value="+31">🇳🇱 +31</option>
                                            <option value="+32">🇧🇪 +32</option>
                                            <option value="+41">🇨🇭 +41</option>
                                            <option value="+43">🇦🇹 +43</option>
                                            <option value="+46">🇸🇪 +46</option>
                                            <option value="+47">🇳🇴 +47</option>
                                            <option value="+45">🇩🇰 +45</option>
                                            <option value="+358">🇫🇮 +358</option>
                                            <option value="+351">🇵🇹 +351</option>
                                            <option value="+353">🇮🇪 +353</option>
                                            <option value="+30">🇬🇷 +30</option>
                                            <option value="+48">🇵🇱 +48</option>
                                            <option value="+420">🇨🇿 +420</option>
                                            <option value="+36">🇭🇺 +36</option>
                                            <option value="+40">🇷🇴 +40</option>
                                            <option value="+359">🇧🇬 +359</option>
                                            <option value="+385">🇭🇷 +385</option>
                                            <option value="+386">🇸🇮 +386</option>
                                            <option value="+421">🇸🇰 +421</option>
                                            <option value="+370">🇱🇹 +370</option>
                                            <option value="+371">🇱🇻 +371</option>
                                            <option value="+372">🇪🇪 +372</option>
                                            <option value="+389">🇲🇰 +389</option>
                                            <option value="+381">🇷🇸 +381</option>
                                            <option value="+382">🇲🇪 +382</option>
                                            <option value="+383">🇽🇰 +383</option>
                                            <option value="+387">🇧🇦 +387</option>
                                            <option value="+385">🇭🇷 +385</option>
                                            <option value="+355">🇦🇱 +355</option>
                                            <option value="+7">🇷🇺 +7</option>
                                            <option value="+90">🇹🇷 +90</option>
                                            <option value="+20">🇪🇬 +20</option>
                                            <option value="+27">🇿🇦 +27</option>
                                            <option value="+52">🇲🇽 +52</option>
                                            <option value="+55">🇧🇷 +55</option>
                                            <option value="+54">🇦🇷 +54</option>
                                            <option value="+56">🇨🇱 +56</option>
                                            <option value="+57">🇨🇴 +57</option>
                                            <option value="+51">🇵🇪 +51</option>
                                            <option value="+86">🇨🇳 +86</option>
                                            <option value="+81">🇯🇵 +81</option>
                                            <option value="+82">🇰🇷 +82</option>
                                            <option value="+65">🇸🇬 +65</option>
                                            <option value="+60">🇲🇾 +60</option>
                                            <option value="+66">🇹🇭 +66</option>
                                            <option value="+62">🇮🇩 +62</option>
                                            <option value="+63">🇵🇭 +63</option>
                                            <option value="+84">🇻🇳 +84</option>
                                            <option value="+91">🇮🇳 +91</option>
                                            <option value="+92">🇵🇰 +92</option>
                                            <option value="+880">🇧🇩 +880</option>
                                            <option value="+94">🇱🇰 +94</option>
                                            <option value="+61">🇦🇺 +61</option>
                                            <option value="+64">🇳🇿 +64</option>
                                            <option value="+961">🇱🇧 +961</option>
                                            <option value="+962">🇯🇴 +962</option>
                                            <option value="+963">🇸🇾 +963</option>
                                            <option value="+964">🇮🇶 +964</option>
                                            <option value="+965">🇰🇼 +965</option>
                                            <option value="+966">🇸🇦 +966</option>
                                            <option value="+968">🇴🇲 +968</option>
                                            <option value="+974">🇶🇦 +974</option>
                                            <option value="+973">🇧🇭 +973</option>
                                            <option value="+961">🇱🇧 +961</option>
                                            <option value="+212">🇲🇦 +212</option>
                                            <option value="+213">🇩🇿 +213</option>
                                            <option value="+216">🇹🇳 +216</option>
                                            <option value="+218">🇱🇾 +218</option>
                                            <option value="+249">🇸🇩 +249</option>
                                            <option value="+254">🇰🇪 +254</option>
                                            <option value="+234">🇳🇬 +234</option>
                                            <option value="+233">🇬🇭 +233</option>
                                            <option value="+256">🇺🇬 +256</option>
                                            <option value="+250">🇷🇼 +250</option>
                                            <option value="+255">🇹🇿 +255</option>
                                            <option value="+260">🇿🇲 +260</option>
                                            <option value="+263">🇿🇼 +263</option>
                                        </select>
                                        <input 
                                            id="phone"
                                            type="tel" 
                                            name="phone"
                                            placeholder=" 70 123 456"
                                            required
                                            class="flex-1 rounded-sm border border-[#e3e3e0] dark:border-[#3E3E3A] bg-white dark:bg-[#161615] px-3 py-2 text-[#1b1b18] dark:text-[#EDEDEC] placeholder-[#706f6c] dark:placeholder-[#A1A09A] focus:outline-none focus:ring-2 focus:ring-[#f53003] focus:border-transparent"
                                        >
                                    </div>
                                </div>

                                <div class="mb-4 lg:mb-6">
                                    <label for="email" class="block font-medium text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Email address</label>
                                    <input 
                                        id="email"
                                        type="email" 
                                        name="email"
                                        placeholder=" your@email.com" 
                                        autocomplete="email"
                                        required
                                        class="block w-full rounded-sm border border-[#e3e3e0] dark:border-[#3E3E3A] bg-white dark:bg-[#161615] px-3 py-2 text-[#1b1b18] dark:text-[#EDEDEC] placeholder-[#706f6c] dark:placeholder-[#A1A09A] focus:outline-none focus:ring-2 focus:ring-[#f53003] focus:border-transparent"
                                    >
                                </div>

                                <p class="mb-4 lg:mb-6 text-[#706f6c] dark:text-[#A1A09A] leading-normal">
                                    By submitting this form, you agree to our privacy policy and terms of service.
                                </p>

                                <div class="flex items-center justify-end gap-x-12">
                                    <button type="button" onclick="showDefaultView()" class="font-medium text-[#1b1b18] dark:text-[#EDEDEC]">Cancel</button>
                                    <button type="submit" style="margin-left: 20px;" class="rounded-sm bg-[#1b1b18] dark:bg-[#eeeeec] dark:text-[#1C1C1A] px-5 py-1.5 border border-black dark:border-[#eeeeec] text-white dark:hover:bg-white dark:hover:border-white hover:bg-black hover:border-black font-medium">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    {{-- Hyde Contact Form (placeholder for now) --}}
                    <div id="hydeForm" class="hidden p-6 lg:p-8 bg-white dark:bg-gray-800" style="min-height: 500px;">
                        <div class="max-w-lg mx-auto">
                            <h2 class="text-2xl font-semibold mb-6 text-[#1b1b18] dark:text-white">Hyde - Contact Form</h2>
                            <p class="text-[#706f6c] dark:text-[#A1A09A]">Coming soon...</p>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif

        <style>
            /* Ensure all interactive elements are clickable */
            input, button, label, select, a {
                pointer-events: auto !important;
                cursor: pointer;
            }
            input[type="text"],
            input[type="email"],
            input[type="tel"] {
                cursor: text;
            }
        </style>

        <script>
            function showVelosForm(event) {
                event.preventDefault();
                console.log('Showing Velos form');
                document.getElementById('defaultView').classList.add('hidden');
                document.getElementById('velosForm').classList.remove('hidden');
                document.getElementById('hydeForm').classList.add('hidden');
            }

            function showHydeForm(event) {
                event.preventDefault();
                console.log('Showing Hyde form');
                document.getElementById('defaultView').classList.add('hidden');
                document.getElementById('velosForm').classList.add('hidden');
                document.getElementById('hydeForm').classList.remove('hidden');
            }

            function showDefaultView() {
                console.log('Showing default view');
                document.getElementById('defaultView').classList.remove('hidden');
                document.getElementById('velosForm').classList.add('hidden');
                document.getElementById('hydeForm').classList.add('hidden');
            }

            // Debug: Test if JavaScript is working
            console.log('JavaScript loaded successfully');
        </script>
    </body>
</html>
