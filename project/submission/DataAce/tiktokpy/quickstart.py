import asyncio
import pandas as pd
from tiktokpy import TikTokPy

async def main():
    async with TikTokPy() as bot:
        # 😏 getting user's feed
        max_retries = 3
        retry_count = 0
        user_feed_items = []

        while retry_count < max_retries:
            try:
                print("Retrieving TikTok data...")
                user_feed_items = await asyncio.wait_for(
                    bot.user_feed(username="overeatmy", amount=30),
                    timeout=120  # Set the timeout value (in seconds) for the request
                )
                print("TikTok data retrieved successfully.")
                break
            except asyncio.TimeoutError:
                print("Timeout error occurred. Retrying TikTok data retrieval...")
                retry_count += 1

        if not user_feed_items:
            print("Unable to retrieve TikTok data. Exiting...")
            return

        for item in user_feed_items:
            data = {
                "Username": item.author.username,
                "Caption": item.desc if item.desc else "-",
                "Video Duration": item.video.duration,
                "Upload Date": item.create_time,
                "Comments": item.stats.comments,
                "Plays": item.stats.plays,
                "Shares": item.stats.shares,
                "Likes": item.stats.likes
            }

            df = pd.DataFrame([data])
            df.to_csv("tiktok_data3.csv", mode="a", header=False, index=False)
            print("Data appended to tiktok_data3.csv")

# Run the main function
asyncio.run(main())