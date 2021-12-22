var 
    dt=new Date(),
    timeDiv=document.getElementById('time');

    timeDiv.innerHTML=dt;

    //print home page
    function printHome(){

        print();
    }

    function cat(){
        var c=prompt('Please Insert a Category...Comedy, Fantasy, Adventure, Action, Horror.');
        c.toLowerCase
        switch(c){
           
            case 'comedy':alert('Comedy is a film genre in which humorous content makes up much of the film.');break;
            case 'fantasy':alert('Fantasy is a genre of speculative fiction involving magical elements, typically set in a fictional universe and sometimes inspired by mythology and folklore.');break;
            case 'adventure':alert('An adventure film is form of adventure fiction, and is a genre of film. Subgenres of adventure films include swashbuckler films, pirate films, and survival films.');break;
            case 'action':alert('Action film is a film genre in which the protagonist or protagonists are thrust into a series of events that typically include violence, extended fighting, physical feats, rescues and frantic chases.');break;
            case 'horror':alert('A horror film is one that seeks to elicit fear or disgust in its audience for entertainment purposes.');break;
            default:alert('wrong input please try again')
        }

    }
