# from selenium import webdriver
# import time
# from bs4 import BeautifulSoup
# from tiktok_captcha_solver import SeleniumSolver
# from selenium_stealth import stealth
# import undetected_chromedriver as uc
import yt_dlp
import os
import sys


url = "https://www.tiktok.com/@dsand00"
lista = []


# def getVideos(url):
#     driver = uc.Chrome(headless=False)
#     try:
#         api_key = "5800f964a3f2959a27460c0deb344e1e"
#         sadcaptcha = SeleniumSolver(driver, api_key)

#         driver.get(url)
#         sadcaptcha.solve_captcha_if_present()

#         time.sleep(5)

#         scroll_pause_time = 3
#         screen_height = driver.execute_script("return window.screen.height;")
#         i = 1
#         while True:
#             driver.execute_script(f"window.scrollTo(0, {screen_height}*{i});")
#             i += 1
#             time.sleep(scroll_pause_time)
#             scroll_height = driver.execute_script("return document.body.scrollHeight;")
#             if (screen_height) * i > scroll_height:
#                 break

#         soup = BeautifulSoup(driver.page_source, "html.parser")
#         with open("pagina_tiktok.html", "w", encoding="utf-8") as file:
#             file.write(soup.prettify())

#         videos = soup.find_all("div", {"class": "css-at0k0c-DivWrapper"})
#         print(len(videos))
#         for video in videos:
#             link = video.a["href"]
#             #print(link)
#             lista.append(link)

#     finally:
#         driver.close()

#     return lista

# print(getVideos(url))
       
        
def downloadVideo(video_url, save_path='tiktoks'):
    if not os.path.exists(save_path):
        os.makedirs(save_path)

    ydl_opts = {
        #'format': 'best[ext=mp4]+bestaudio[ext=m4a]/best[ext=mp4]/best/format_id$=-1]',
        #'format': 'bestvideo+bestaudio/best',
        #'format': 'best[height>=720]',
        #'format': 'best[vcodec^=h265]',
        #'format': 'best[format_id$=-1]',
        'format': 'b[url!^="https://www.tiktok.com/"]',
        'outtmpl': os.path.join(save_path, '%(id)s.%(ext)s'),
        'verbose': True,
        "postprocessors": [
            {"key": "FFmpegCopyStream"},
        ],
        "postprocessor_args": {
            "copystream": [
                "-c:v", "libx264", "-c:a", "ac3"
            ],
        },
    }

    try:
        with yt_dlp.YoutubeDL(ydl_opts) as ydl:
            info = ydl.extract_info(video_url, download=True)
            filename = ydl.prepare_filename(info)
            print(f"Video successfully downloaded: {filename}")
            return filename
    except Exception as e:
        print(f"Error downloading video: {str(e)}")
        return None

if __name__ == "__main__":
    if len(sys.argv) > 1:
        tiktok_url = sys.argv[1]
        downloadVideo(tiktok_url)
    else:
        print("No TikTok URL provided.")
    



# downloadVideo("https://www.tiktok.com/@sbs_xs8/video/7416207821441715461?_r=1&_t=8pt9WO7BoRR")
    