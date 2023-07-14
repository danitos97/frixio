export default class Server{

    static relativeURL = "../../";


    static async login(user, pass){
        const data = { user: user, pass: pass };
        return await Server.#post("login",data);
    }

    static async logout(){
        return await Server.#post("logout");
    }

    static async pay(data){
        return await Server.#post("pay",data);
    }

    static async sendMail(email){
        return await Server.#post("sendMail", {to: email});
    }

    static async #post(option,data){
        const body = new FormData();
        body.append("option",option)
        for(const key in data)
            body.append(key,data[key]);
        const url = Server.relativeURL + "server/tasks.php";
        const call = await fetch(url,{method:"POST",body:body});
        return await call.json();
    }

   
}