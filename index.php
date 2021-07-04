
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Phonebook</title>
    <link rel="stylesheet" href="./index.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.redirect@1.1.4/jquery.redirect.js"></script>
  </head>
  <body>
    <div class="sigin_container">

        <svg  id="signin_title" width="286" height="98" viewBox="0 0 286 98" fill="none" xmlns="http://www.w3.org/2000/svg">
        <mask id="path-1-outside-1" maskUnits="userSpaceOnUse" x="0.799988" y="0.399994" width="285" height="98" fill="black">
        <rect fill="white" x="0.799988" y="0.399994" width="285" height="98"/>
        <path d="M23.3 72.7C19.8333 72.7 16.2667 72.1333 12.6 71C8.99999 69.8 6.39999 68.6333 4.79999 67.5V51.1L9.69999 50.6C10.1 53.8 10.5333 56.5 11 58.7C11.5333 60.9 12.3 63.1333 13.3 65.4C16.6333 66.9333 20.4333 67.7 24.7 67.7C28.4333 67.7 31.4333 66.6667 33.7 64.6C36.0333 62.5333 37.2 59.6667 37.2 56C37.2 53.4 36.5333 51.2 35.2 49.4C33.9333 47.6 32.3333 46.1667 30.4 45.1C28.5333 43.9667 26 42.7333 22.8 41.4C19.2 39.8667 16.2333 38.4 13.9 37C11.6333 35.5333 9.69999 33.6 8.09999 31.2C6.49999 28.7333 5.69999 25.7 5.69999 22.1C5.69999 16.7 7.49999 12.4 11.1 9.2C14.7667 5.99999 19.8333 4.39999 26.3 4.39999C29.6333 4.39999 32.7333 4.96666 35.6 6.1C38.5333 7.23333 40.8333 8.76666 42.5 10.7C44.2333 12.6333 45.1 14.7667 45.1 17.1C45.1 21.3667 43.4333 23.5 40.1 23.5C38.5667 23.5 37.3667 23.2667 36.5 22.8C35.7 22.3333 34.9667 21.6333 34.3 20.7C35.7 19.3 36.4 17.6 36.4 15.6C36.4 13.8667 35.5 12.4333 33.7 11.3C31.9 10.1 29.4 9.5 26.2 9.5C22.4667 9.5 19.5333 10.3667 17.4 12.1C15.3333 13.8333 14.3 16.3333 14.3 19.6C14.3 22 14.9 24 16.1 25.6C17.3667 27.2 18.9 28.5333 20.7 29.6C22.5 30.6 25 31.7667 28.2 33.1C32.0667 34.7667 35.2 36.3333 37.6 37.8C40 39.2667 42.0333 41.3333 43.7 44C45.4333 46.6 46.3 49.9 46.3 53.9C46.3 59.9667 44.2 64.6333 40 67.9C35.8 71.1 30.2333 72.7 23.3 72.7Z"/>
        <path d="M51.7125 68.4C53.2458 68.1333 54.4792 67.8333 55.4125 67.5C56.3458 67.1667 57.3125 66.6333 58.3125 65.9V37.1C58.3125 34.6333 57.7792 32.9667 56.7125 32.1C55.7125 31.1667 53.9125 30.6333 51.3125 30.5L51.6125 27.6C54.2792 27.1333 57.0125 26.4667 59.8125 25.6C62.6792 24.7333 64.3458 24.2333 64.8125 24.1L66.8125 25.2V65.9C68.4792 67.1 70.8125 68 73.8125 68.6L73.4125 72H51.3125L51.7125 68.4ZM61.4125 16.7C57.9458 16.7 56.2125 14.7667 56.2125 10.9C56.2125 7.03333 57.9458 5.1 61.4125 5.1C63.1458 5.1 64.4458 5.6 65.3125 6.59999C66.2458 7.59999 66.7125 9.03333 66.7125 10.9C66.7125 12.7667 66.2458 14.2 65.3125 15.2C64.4458 16.2 63.1458 16.7 61.4125 16.7Z"/>
        <path d="M99.5469 93.9C92.4802 93.9 87.1469 92.7667 83.5469 90.5C80.0135 88.2333 78.2469 85.1667 78.2469 81.3C78.2469 78.9667 78.5135 77.1 79.0469 75.7C79.5802 74.3 80.3802 73.1333 81.4469 72.2C82.5135 71.2667 84.0135 70.2667 85.9469 69.2C84.4802 67.5333 83.7469 65.3 83.7469 62.5L91.9469 56.7C88.0135 55.7667 84.9469 53.9667 82.7469 51.3C80.6135 48.5667 79.5469 45.2 79.5469 41.2C79.5469 35.7333 81.0802 31.6 84.1469 28.8C87.2135 25.9333 91.7802 24.5 97.8469 24.5C102.447 24.5 106.18 25.3 109.047 26.9C111.447 26.1667 112.647 24.8667 112.647 23C112.647 22.3333 112.38 21.6667 111.847 21C111.38 20.3333 110.714 19.8 109.847 19.4C109.847 18.4 110.247 17.6 111.047 17C111.914 16.3333 113.08 16 114.547 16C116.08 16 117.28 16.4667 118.147 17.4C119.08 18.2667 119.547 19.4667 119.547 21C119.547 23 118.947 24.7667 117.747 26.3C116.547 27.7667 114.814 28.9 112.547 29.7C115.014 32.4333 116.247 36.2667 116.247 41.2C116.247 46.1333 114.58 50.0667 111.247 53C107.98 55.8667 103.514 57.3 97.8469 57.3H96.4469L92.2469 62.5C92.3802 63.5 92.8802 64.2 93.7469 64.6C94.6802 65 96.3135 65.2333 98.6469 65.3H102.847C108.98 65.3 113.48 66.7 116.347 69.5C119.28 72.2333 120.747 75.7333 120.747 80C120.747 84.4667 118.98 87.9 115.447 90.3C111.98 92.7 106.68 93.9 99.5469 93.9ZM97.8469 53.2C101.114 53.2 103.48 52.2333 104.947 50.3C106.414 48.3667 107.147 45.2333 107.147 40.9C107.147 36.5667 106.414 33.4333 104.947 31.5C103.48 29.5 101.114 28.5 97.8469 28.5C94.5802 28.5 92.2135 29.5 90.7469 31.5C89.2802 33.4333 88.5469 36.5667 88.5469 40.9C88.5469 45.2333 89.2802 48.3667 90.7469 50.3C92.2135 52.2333 94.5802 53.2 97.8469 53.2ZM99.5469 89.8C107.547 89.8 111.547 86.5333 111.547 80C111.547 77.2667 110.58 75.2667 108.647 74C106.78 72.7333 104.047 72.1 100.447 72.1H91.9469C88.9469 74.0333 87.4469 76.6667 87.4469 80C87.4469 83.2667 88.4802 85.7 90.5469 87.3C92.6135 88.9667 95.6135 89.8 99.5469 89.8Z"/>
        <path d="M125.345 68.4C126.879 68.1333 128.112 67.8333 129.045 67.5C130.045 67.1 131.012 66.5333 131.945 65.8V37.3C131.945 34.8333 131.412 33.1667 130.345 32.3C129.345 31.3667 127.545 30.8333 124.945 30.7L125.245 27.8C127.312 27.4 130.279 26.6 134.145 25.4L137.445 24.4L139.245 25.3L140.145 31.5C141.679 29.3 143.612 27.5667 145.945 26.3C148.345 25.0333 150.812 24.4 153.345 24.4C158.212 24.4 161.979 25.6333 164.645 28.1C167.379 30.5 168.745 33.8667 168.745 38.2V65.8C169.345 66.3333 170.312 66.8667 171.645 67.4C172.979 67.9333 174.345 68.3333 175.745 68.6L175.345 72H153.345L153.645 68.6C156.179 68.2 158.379 67.2667 160.245 65.8V39.1C160.245 32.5 157.379 29.2 151.645 29.2C149.379 29.2 147.212 30 145.145 31.6C143.079 33.1333 141.512 35.1333 140.445 37.6V65.8C142.045 67.0667 144.379 68 147.445 68.6L147.045 72H124.945L125.345 68.4Z"/>
        <path d="M203.08 68.4C204.613 68.1333 205.846 67.8333 206.78 67.5C207.713 67.1667 208.68 66.6333 209.68 65.9V37.1C209.68 34.6333 209.146 32.9667 208.08 32.1C207.08 31.1667 205.28 30.6333 202.68 30.5L202.98 27.6C205.646 27.1333 208.38 26.4667 211.18 25.6C214.046 24.7333 215.713 24.2333 216.18 24.1L218.18 25.2V65.9C219.846 67.1 222.18 68 225.18 68.6L224.78 72H202.68L203.08 68.4ZM212.78 16.7C209.313 16.7 207.58 14.7667 207.58 10.9C207.58 7.03333 209.313 5.1 212.78 5.1C214.513 5.1 215.813 5.6 216.68 6.59999C217.613 7.59999 218.08 9.03333 218.08 10.9C218.08 12.7667 217.613 14.2 216.68 15.2C215.813 16.2 214.513 16.7 212.78 16.7Z"/>
        <path d="M230.814 68.4C232.347 68.1333 233.581 67.8333 234.514 67.5C235.514 67.1 236.481 66.5333 237.414 65.8V37.3C237.414 34.8333 236.881 33.1667 235.814 32.3C234.814 31.3667 233.014 30.8333 230.414 30.7L230.714 27.8C232.781 27.4 235.747 26.6 239.614 25.4L242.914 24.4L244.714 25.3L245.614 31.5C247.147 29.3 249.081 27.5667 251.414 26.3C253.814 25.0333 256.281 24.4 258.814 24.4C263.681 24.4 267.447 25.6333 270.114 28.1C272.847 30.5 274.214 33.8667 274.214 38.2V65.8C274.814 66.3333 275.781 66.8667 277.114 67.4C278.447 67.9333 279.814 68.3333 281.214 68.6L280.814 72H258.814L259.114 68.6C261.647 68.2 263.847 67.2667 265.714 65.8V39.1C265.714 32.5 262.847 29.2 257.114 29.2C254.847 29.2 252.681 30 250.614 31.6C248.547 33.1333 246.981 35.1333 245.914 37.6V65.8C247.514 67.0667 249.847 68 252.914 68.6L252.514 72H230.414L230.814 68.4Z"/>
        </mask>
        <path d="M23.3 72.7C19.8333 72.7 16.2667 72.1333 12.6 71C8.99999 69.8 6.39999 68.6333 4.79999 67.5V51.1L9.69999 50.6C10.1 53.8 10.5333 56.5 11 58.7C11.5333 60.9 12.3 63.1333 13.3 65.4C16.6333 66.9333 20.4333 67.7 24.7 67.7C28.4333 67.7 31.4333 66.6667 33.7 64.6C36.0333 62.5333 37.2 59.6667 37.2 56C37.2 53.4 36.5333 51.2 35.2 49.4C33.9333 47.6 32.3333 46.1667 30.4 45.1C28.5333 43.9667 26 42.7333 22.8 41.4C19.2 39.8667 16.2333 38.4 13.9 37C11.6333 35.5333 9.69999 33.6 8.09999 31.2C6.49999 28.7333 5.69999 25.7 5.69999 22.1C5.69999 16.7 7.49999 12.4 11.1 9.2C14.7667 5.99999 19.8333 4.39999 26.3 4.39999C29.6333 4.39999 32.7333 4.96666 35.6 6.1C38.5333 7.23333 40.8333 8.76666 42.5 10.7C44.2333 12.6333 45.1 14.7667 45.1 17.1C45.1 21.3667 43.4333 23.5 40.1 23.5C38.5667 23.5 37.3667 23.2667 36.5 22.8C35.7 22.3333 34.9667 21.6333 34.3 20.7C35.7 19.3 36.4 17.6 36.4 15.6C36.4 13.8667 35.5 12.4333 33.7 11.3C31.9 10.1 29.4 9.5 26.2 9.5C22.4667 9.5 19.5333 10.3667 17.4 12.1C15.3333 13.8333 14.3 16.3333 14.3 19.6C14.3 22 14.9 24 16.1 25.6C17.3667 27.2 18.9 28.5333 20.7 29.6C22.5 30.6 25 31.7667 28.2 33.1C32.0667 34.7667 35.2 36.3333 37.6 37.8C40 39.2667 42.0333 41.3333 43.7 44C45.4333 46.6 46.3 49.9 46.3 53.9C46.3 59.9667 44.2 64.6333 40 67.9C35.8 71.1 30.2333 72.7 23.3 72.7Z" stroke="#242F6B" stroke-width="8" mask="url(#path-1-outside-1)"/>
        <path d="M51.7125 68.4C53.2458 68.1333 54.4792 67.8333 55.4125 67.5C56.3458 67.1667 57.3125 66.6333 58.3125 65.9V37.1C58.3125 34.6333 57.7792 32.9667 56.7125 32.1C55.7125 31.1667 53.9125 30.6333 51.3125 30.5L51.6125 27.6C54.2792 27.1333 57.0125 26.4667 59.8125 25.6C62.6792 24.7333 64.3458 24.2333 64.8125 24.1L66.8125 25.2V65.9C68.4792 67.1 70.8125 68 73.8125 68.6L73.4125 72H51.3125L51.7125 68.4ZM61.4125 16.7C57.9458 16.7 56.2125 14.7667 56.2125 10.9C56.2125 7.03333 57.9458 5.1 61.4125 5.1C63.1458 5.1 64.4458 5.6 65.3125 6.59999C66.2458 7.59999 66.7125 9.03333 66.7125 10.9C66.7125 12.7667 66.2458 14.2 65.3125 15.2C64.4458 16.2 63.1458 16.7 61.4125 16.7Z" stroke="#242F6B" stroke-width="8" mask="url(#path-1-outside-1)"/>
        <path d="M99.5469 93.9C92.4802 93.9 87.1469 92.7667 83.5469 90.5C80.0135 88.2333 78.2469 85.1667 78.2469 81.3C78.2469 78.9667 78.5135 77.1 79.0469 75.7C79.5802 74.3 80.3802 73.1333 81.4469 72.2C82.5135 71.2667 84.0135 70.2667 85.9469 69.2C84.4802 67.5333 83.7469 65.3 83.7469 62.5L91.9469 56.7C88.0135 55.7667 84.9469 53.9667 82.7469 51.3C80.6135 48.5667 79.5469 45.2 79.5469 41.2C79.5469 35.7333 81.0802 31.6 84.1469 28.8C87.2135 25.9333 91.7802 24.5 97.8469 24.5C102.447 24.5 106.18 25.3 109.047 26.9C111.447 26.1667 112.647 24.8667 112.647 23C112.647 22.3333 112.38 21.6667 111.847 21C111.38 20.3333 110.714 19.8 109.847 19.4C109.847 18.4 110.247 17.6 111.047 17C111.914 16.3333 113.08 16 114.547 16C116.08 16 117.28 16.4667 118.147 17.4C119.08 18.2667 119.547 19.4667 119.547 21C119.547 23 118.947 24.7667 117.747 26.3C116.547 27.7667 114.814 28.9 112.547 29.7C115.014 32.4333 116.247 36.2667 116.247 41.2C116.247 46.1333 114.58 50.0667 111.247 53C107.98 55.8667 103.514 57.3 97.8469 57.3H96.4469L92.2469 62.5C92.3802 63.5 92.8802 64.2 93.7469 64.6C94.6802 65 96.3135 65.2333 98.6469 65.3H102.847C108.98 65.3 113.48 66.7 116.347 69.5C119.28 72.2333 120.747 75.7333 120.747 80C120.747 84.4667 118.98 87.9 115.447 90.3C111.98 92.7 106.68 93.9 99.5469 93.9ZM97.8469 53.2C101.114 53.2 103.48 52.2333 104.947 50.3C106.414 48.3667 107.147 45.2333 107.147 40.9C107.147 36.5667 106.414 33.4333 104.947 31.5C103.48 29.5 101.114 28.5 97.8469 28.5C94.5802 28.5 92.2135 29.5 90.7469 31.5C89.2802 33.4333 88.5469 36.5667 88.5469 40.9C88.5469 45.2333 89.2802 48.3667 90.7469 50.3C92.2135 52.2333 94.5802 53.2 97.8469 53.2ZM99.5469 89.8C107.547 89.8 111.547 86.5333 111.547 80C111.547 77.2667 110.58 75.2667 108.647 74C106.78 72.7333 104.047 72.1 100.447 72.1H91.9469C88.9469 74.0333 87.4469 76.6667 87.4469 80C87.4469 83.2667 88.4802 85.7 90.5469 87.3C92.6135 88.9667 95.6135 89.8 99.5469 89.8Z" stroke="#242F6B" stroke-width="8" mask="url(#path-1-outside-1)"/>
        <path d="M125.345 68.4C126.879 68.1333 128.112 67.8333 129.045 67.5C130.045 67.1 131.012 66.5333 131.945 65.8V37.3C131.945 34.8333 131.412 33.1667 130.345 32.3C129.345 31.3667 127.545 30.8333 124.945 30.7L125.245 27.8C127.312 27.4 130.279 26.6 134.145 25.4L137.445 24.4L139.245 25.3L140.145 31.5C141.679 29.3 143.612 27.5667 145.945 26.3C148.345 25.0333 150.812 24.4 153.345 24.4C158.212 24.4 161.979 25.6333 164.645 28.1C167.379 30.5 168.745 33.8667 168.745 38.2V65.8C169.345 66.3333 170.312 66.8667 171.645 67.4C172.979 67.9333 174.345 68.3333 175.745 68.6L175.345 72H153.345L153.645 68.6C156.179 68.2 158.379 67.2667 160.245 65.8V39.1C160.245 32.5 157.379 29.2 151.645 29.2C149.379 29.2 147.212 30 145.145 31.6C143.079 33.1333 141.512 35.1333 140.445 37.6V65.8C142.045 67.0667 144.379 68 147.445 68.6L147.045 72H124.945L125.345 68.4Z" stroke="#242F6B" stroke-width="8" mask="url(#path-1-outside-1)"/>
        <path d="M203.08 68.4C204.613 68.1333 205.846 67.8333 206.78 67.5C207.713 67.1667 208.68 66.6333 209.68 65.9V37.1C209.68 34.6333 209.146 32.9667 208.08 32.1C207.08 31.1667 205.28 30.6333 202.68 30.5L202.98 27.6C205.646 27.1333 208.38 26.4667 211.18 25.6C214.046 24.7333 215.713 24.2333 216.18 24.1L218.18 25.2V65.9C219.846 67.1 222.18 68 225.18 68.6L224.78 72H202.68L203.08 68.4ZM212.78 16.7C209.313 16.7 207.58 14.7667 207.58 10.9C207.58 7.03333 209.313 5.1 212.78 5.1C214.513 5.1 215.813 5.6 216.68 6.59999C217.613 7.59999 218.08 9.03333 218.08 10.9C218.08 12.7667 217.613 14.2 216.68 15.2C215.813 16.2 214.513 16.7 212.78 16.7Z" stroke="#242F6B" stroke-width="8" mask="url(#path-1-outside-1)"/>
        <path d="M230.814 68.4C232.347 68.1333 233.581 67.8333 234.514 67.5C235.514 67.1 236.481 66.5333 237.414 65.8V37.3C237.414 34.8333 236.881 33.1667 235.814 32.3C234.814 31.3667 233.014 30.8333 230.414 30.7L230.714 27.8C232.781 27.4 235.747 26.6 239.614 25.4L242.914 24.4L244.714 25.3L245.614 31.5C247.147 29.3 249.081 27.5667 251.414 26.3C253.814 25.0333 256.281 24.4 258.814 24.4C263.681 24.4 267.447 25.6333 270.114 28.1C272.847 30.5 274.214 33.8667 274.214 38.2V65.8C274.814 66.3333 275.781 66.8667 277.114 67.4C278.447 67.9333 279.814 68.3333 281.214 68.6L280.814 72H258.814L259.114 68.6C261.647 68.2 263.847 67.2667 265.714 65.8V39.1C265.714 32.5 262.847 29.2 257.114 29.2C254.847 29.2 252.681 30 250.614 31.6C248.547 33.1333 246.981 35.1333 245.914 37.6V65.8C247.514 67.0667 249.847 68 252.914 68.6L252.514 72H230.414L230.814 68.4Z" stroke="#242F6B" stroke-width="8" mask="url(#path-1-outside-1)"/>
        </svg>

        <form class="singin_form">

          <label class="singin_form_name form_label" for="Name">Name</label>
          <input id="signin_name_input" class="signin_input" type="text" name="Name" placeholder="Name"><br>
          <label class="singin_form_phonenumber form_label" for="Phone">Phone</label>
          <input id="signin_phonenumber_input" class="signin_input" type="text" name="Phone" placeholder="Phone number"><br>
          <label class="singin_form_address form_label" for="Address">Address</label>
          <input id="signin_address_input" class="signin_input" type="text" name="Address" placeholder="Address"><br>
          <label id="signin_form_error_label" class="form_label seen">Every inputs are mandatory!!</label>
          <div class="signin_buttons">
            <div class="save_submit_submit">
              <button id="signin_submit_button" class="submit_button" type="submit" name="button">Submit</button>
            </div>
            <div>
              <button id="vew_button" class="submit_button" type="button" name="button">Vew data</button>
            </div>
        </div>
        </form>
    </div>

    <script type="text/javascript" src="./index.js"></script>
  </body>
</html>
