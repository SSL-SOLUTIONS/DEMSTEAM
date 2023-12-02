// alert('ky hal aye')
// alert('linkes')

function texthead(val) {
    const subHead = document.getElementById('OP1');
    const subPara = document.getElementById('OP2');
    const subPara3 = document.getElementById('OP3');

    if (val == 1) {
        // alert('1');
        subHead.innerHTML = "  What sort of businesses do you work with?  ";
        subPara.innerText = " What services does DMA provide?  ";
        subPara3.innerText = " What is your pricing model?  ";
    }
    else if (val == 2) {
        // alert('2');
        subHead.innerHTML = "  How is your SEO service unique to those offered by other agencies?  ";
        subPara.innerText = " How does DMA charge for SEO services?  ";
        subPara3.innerText = " How do I know if I am the right fit for DMA's SEO services?  ";
    }
    else if (val == 3) {

        subHead.innerHTML = " How is your PPC service unique to those offered by other agencies?   ";
        subPara.innerText = " How does DMA charge for PPC services?  ";
        subPara3.innerText = " How do I know if I am the right fit for DMA's PPC services?  ";
    }
    else if (val == 4) {
        subHead.innerHTML = " How is your social media service unique to those offered by other agencies?   ";
        subPara.innerText = "  How does DMA charge for social media services? ";
        subPara3.innerText = "  How do I know if I am the right fit for DMA's social media services? ";
    }
    else if (val == 5) {
        subHead.innerHTML = "  How is your reputation management service unique to those offered by other agencies?  ";
        subPara.innerText = " How does DMA charge for reputation management services?  ";
        subPara3.innerText = " How do I know if I am the right fit for DMA's reputation management services?  ";
    }
    else if (val == 6) {
        subHead.innerHTML = " How are your web design and development services unique to those offered by other agencies?   ";
        subPara.innerText = " How does DMA charge for web design and development services?  ";
        subPara3.innerText = "  How do I know if I am the right fit for DMA's web design and development services? ";
    }
    else if (val == 7) {
        subHead.innerHTML = " How are your marketing automation services unique to those offered by other agencies?   ";
        subPara.innerText = " How does DMA charge for marketing automation services?  ";
        subPara3.innerText = "  How do I know if I am the right fit for DMA's marketing automation services? ";
    }

}