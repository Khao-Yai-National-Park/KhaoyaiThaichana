const puppeteer = require ('puppeteer');
//import puppeteer from 'puppeteer';
//import {getlink} from './GetlinkThaichana.mjs';
//const request = require('request');

//const url = getlink;
const url = 'https://merchant.thaichana.com/search/profile/hDJgOxr-jjAAXDaPiWSQBG57';

function thaichana() { 
        var now;
            puppeteer.launch({
                    headless: true
                }).then(async browser => {
                    const page = await browser.newPage();
                    
                    await page.goto(url);
                        page.waitForSelector('.css-18spifb')
                        .then(async function(){
                            const now1 = await page.$eval('.css-18spifb span',element => element.innerHTML);
                            const strstop = now1.search('คน')-1;
                            now = now1.substring(0,strstop);
                            console.log('Thaichana:',now);              
                            browser.close();
                            return now; 
                        })
                })    
     return now;  
}
thaichana();