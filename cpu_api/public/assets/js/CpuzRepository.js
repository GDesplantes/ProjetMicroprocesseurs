class CpuzRepository 
{
    static apiBaseUrl = 'http://localhost:4000/api';
    static async fetchUrl() 
    {
        let response = await fetch(CpuzRepository.apiBaseUrl + '/cpu')
        
        let json = await response.json();

        console.log(json);

        return json;
    }
}


export { CpuzRepository }
