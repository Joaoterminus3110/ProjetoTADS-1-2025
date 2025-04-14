

const scriptsInEvents = {

	async FolhaDeEventoFase1_Event6_Act3(runtime, localVars)
	{
		if(runtime.globalVars.Luzdestruida == 3){
			runtime.goToLayout("FASE2");
		}
	},

	async FolhaDeEventoFase2_Event5_Act3(runtime, localVars)
	{
		if(runtime.globalVars.ESPADA >= 3){
			runtime.goToLayout("FASE DO GANHADOR"
			);
		}
	}
};

self.C3.ScriptsInEvents = scriptsInEvents;
