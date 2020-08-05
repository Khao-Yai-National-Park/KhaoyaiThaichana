const puppeteer = require ('puppeteer');
//import puppeteer from 'puppeteer';
//import {getlink} from './GetlinkThaichana.mjs';
//const request = require('request');

//const url = getlink;
const url = 'https://merchant.thaichana.com/search?size=10&page=0&merchantName=%E0%B8%AD%E0%B8%B8%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%99%E0%B9%81%E0%B8%AB%E0%B9%88%E0%B8%87%E0%B8%8A%E0%B8%B2%E0%B8%95%E0%B8%B4%E0%B9%80%E0%B8%82%E0%B8%B2%E0%B9%83%E0%B8%AB%E0%B8%8D%E0%B9%88&category=%E0%B8%AB%E0%B8%99%E0%B9%88%E0%B8%A7%E0%B8%A2%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B8%A3%E0%B8%B2%E0%B8%8A%E0%B8%81%E0%B8%B2%E0%B8%A3&province=%E0%B8%99%E0%B8%84%E0%B8%A3%E0%B8%A3%E0%B8%B2%E0%B8%8A%E0%B8%AA%E0%B8%B5%E0%B8%A1%E0%B8%B2&rating=0&passQuestionnaire=false&lockLatLong=false';

function getlink() { 
    puppeteer.launch({headless: true
    }).then(async browser => {
        const page = await browser.newPage();               
        await page.goto(url);
        page.waitForSelector('.css-1rrtwvw')
                    .then(async function(){
                        var url ;
                        const link1 = await page.$eval('.css-1rrtwvw',element => element.innerHTML);
                        const strstop = link1.search('><div class="css-1wejcvt')-1;
                        const strln = link1.length;                   
                        url = 'https://merchant.thaichana.com'+ link1.substring(14,strstop);
                    //    console.log('Thaichana link:',strln ,' ',strstop,' ',link1); 
                        console.log('Thaichana link:',url);  
                    //    console.log(now1);              
                        browser.close();
                        return url ;  
                            
                        })
                        
                        
        })

}
getlink();
//module.exports = Getlink;