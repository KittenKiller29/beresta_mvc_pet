class MainSlider{

	#images=[];

	constructor(...args){
		for(let i=0;i<args.length;i++){
			this.#images[i]=args[i];
		}
	}
}