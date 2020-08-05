const puppeteer = require ('puppeteer');
const url1 = 'https://merchant.thaichana.com/search?size=10&page=0&merchantName=%E0%B8%AD%E0%B8%B8%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%99%E0%B9%81%E0%B8%AB%E0%B9%88%E0%B8%87%E0%B8%8A%E0%B8%B2%E0%B8%95%E0%B8%B4%E0%B9%80%E0%B8%82%E0%B8%B2%E0%B9%83%E0%B8%AB%E0%B8%8D%E0%B9%88&category=%E0%B8%AB%E0%B8%99%E0%B9%88%E0%B8%A7%E0%B8%A2%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B8%A3%E0%B8%B2%E0%B8%8A%E0%B8%81%E0%B8%B2%E0%B8%A3&province=%E0%B8%99%E0%B8%84%E0%B8%A3%E0%B8%A3%E0%B8%B2%E0%B8%8A%E0%B8%AA%E0%B8%B5%E0%B8%A1%E0%B8%B2&rating=0&passQuestionnaire=false&lockLatLong=false';

var url;
const request = require('request');


function thaichana() { 
    //const url3 = getlink();
        const url3 = 'https://merchant.thaichana.com/search/profile/2iV50QzBjqTuzywprvWPwkO5';
        var now;
            puppeteer.launch({
                    headless: true
                }).then(async browser => {
                    const page = await browser.newPage();
                    
                    await page.goto(url3);
                        page.waitForSelector('.css-18spifb')
                        .then(async function(){
                            const now1 = await page.$eval('.css-18spifb span',element => element.innerHTML);
                            const strstop = now1.search('คน')-1;
                            now = now1.substring(0,strstop);
                            console.log('Thaichana:',now);    
                            return now;                  
                            browser.close();
                        })
                })    
     return now;  
}
var url4 = thaichana();
// console.log('Thaichana: ' ,url4);
