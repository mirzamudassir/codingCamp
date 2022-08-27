//simple blockchain demo
//create the block first

//get the SHA256 library imported
const SHA256= require('crypto-js/sha256');

class Block{
    //define the constructor
    constructor(index, timestamp, data, previousHash= ''){
        this.index= index;
        this.timestamp= timestamp;
        this.data = data;
        this.previousHash= previousHash;
        this.hash= this.calculateHash();
        this.nonce= 0;
    }

    //define the mothod to calculate hash
    calculateHash(){
        return SHA256(this.index + this.previousHash + this.timestamp + JSON.stringify(this.data) + this.nonce).toString();
    }

    //define the mine method to check the intergrity of block
    mineBlock(difficulty){
        while(this.hash.substring(0, difficulty) !== Array(difficulty +1).join("0")){
            this.nonce++;
            this.hash= this.calculateHash();
        }
        console.log("Block Mined: " + this.hash);
    }
}

class Blockchain{
    constructor(){
        this.chain= [this.createGenesisBlock()];
        this.difficulty= 4;
    }

    //create the first block manually
    createGenesisBlock(){
        return new Block('0', '01/01/2022', 'Gensis Block', '0');
    }

    //return the latest block
    getLatestBlock(){
        return this.chain[this.chain.length -1];
    }

    //add the new block to the chain
    addBlock(newBlock){
        newBlock.previousHash= this.getLatestBlock().hash;
        newBlock.mineBlock(this.difficulty);
        this.chain.push(newBlock);
    }

    //check the integrity of the chain
    isChainValid(){
        for(let i= 1; i< this.chain.length; i++){
            const currentBlock= this.chain[i];
            const previousBlock= this.chain[i -1];

            if(currentBlock.hash !== currentBlock.calculateHash()){
                return false;
            }

            if(currentBlock.previousHash !== previousBlock.hash){
                return false;
            }
            return true;
        }
    }
}

let xCoin= new Blockchain();
console.log("Mining Block 1....");
xCoin.addBlock(new Block(1, '01/02/2022', {amount : 100}));
console.log("Mining Block 2....");
xCoin.addBlock(new Block(2, '03/02/2022', {amount : 200}));

/* console.log('is chain valid? ' + xCoin.isChainValid());

xCoin.chain[1].data= {amount : 10000};
console.log('is chain valid? ' + xCoin.isChainValid());

//console.log(JSON.stringify(xCoin, null, 4)); */